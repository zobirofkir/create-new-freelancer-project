<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    { 
        $students = Student::all();
        return view('dashboard', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "date_of_birth" => "required",
            "email" => "required|email",
            'user_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Update the field name
        ]);
    
        // Get the currently authenticated user
        $user = Auth::user();
    
        // Check if a student with the same email already exists
        $existingStudent = Student::where('email', $request->input("email"))->first();
    
        if ($existingStudent) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['email' => 'A student with this email already exists.']);
        }
    
        // Create a new Student associated with the authenticated user
        $student = new Student();
        $student->first_name = $request->input("first_name");
        $student->last_name = $request->input("last_name");
        $student->date_of_birth = $request->input("date_of_birth");
        $student->email = $request->input("email");
    
        // Associate the student with the user
        $student->user_id = $user->id;
    
        // Check if an image was uploaded
        if ($request->hasFile('user_image')) { // Change 'image' to 'user_image'
            // Store the uploaded image in the public storage directory
            $imagePath = $request->file('user_image')->store('public');
    
            // Remove 'public/' from the image path
            $student->image = str_replace('public/', '', $imagePath);
    
            // Generate the public URL for the image
            $imageURL = asset('storage/' . $student->image);
    
            // You can now use $imageURL to display or link to the image in your views
        }
    
        $student->save();
    
        return redirect("/dashboard");
    }
        
    
    public function show(Student $id)
    {
        return view('students.show', ['student' => $id]);
    }

    public function edit($id)
    {
        $student = Student::find($id);
    
        if (!$student) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Student not found.']);
        }
    
        return view('students.edit', compact('student'));
    }
            
    public function update(Request $request, $id)
    {
        $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "date_of_birth" => "required",
            "email" => "required|email",
            'user_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Update the field name
        ]);

        // Find the student you want to update by their ID
        $student = Student::find($id);

        if (!$student) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Student not found.']);
        }

        // Check if the email is being updated and it's different from the current one
        if ($request->input("email") !== $student->email) {
            // Check if a student with the same email already exists
            $existingStudent = Student::where('email', $request->input("email"))->first();

            if ($existingStudent) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['email' => 'A student with this email already exists.']);
            }
        }

        // Update student details
        $student->first_name = $request->input("first_name");
        $student->last_name = $request->input("last_name");
        $student->date_of_birth = $request->input("date_of_birth");
        $student->email = $request->input("email");

        // Check if a new image was uploaded
        if ($request->hasFile('user_image')) { // Change 'image' to 'user_image'
            // Store the uploaded image in the public storage directory
            $imagePath = $request->file('user_image')->store('public');

            // Remove 'public/' from the image path
            $student->image = str_replace('public/', '', $imagePath);

            // Generate the public URL for the image
            $imageURL = asset('storage/' . $student->image);

            // You can now use $imageURL to display or link to the image in your views
    }

    $student->save();

    return redirect("/dashboard");
}

            
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route("dashboard");
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Add code to filter students based on the search query
        $students = Student::where('first_name', 'like', '%' . $query . '%')
                            ->orWhere('last_name', 'like', '%' . $query . '%')
                            ->orWhere('email', 'like', '%' . $query . '%')
                            ->get();

        return view('search-results', compact('students', 'query'));
    }


}