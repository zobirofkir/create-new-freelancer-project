<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getExam = Exam::all();
        return view("exam.index", compact("getExam"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("exam.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'exam_date' => 'required|date', // Added date validation
            'exam_time' => 'required|date_format:H:i', // Added time validation
        ]);
    
        $getExam = new Exam();
        $getExam->title = $request->input('title');
        $getExam->description = $request->input('description');
        $getExam->exam_date = $request->input('exam_date');
        $getExam->exam_time = $request->input('exam_time');
        $getExam->save();
        return redirect('/exam');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Exam $id)
    {
        return view('exam.show', ['exam' => $id]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $exam = Exam::find($id);
    
        if (!$exam) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Exam not found.']);
        }
    
        return view('exam.edit', compact('exam'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'exam_date' => 'required|date', // Added date validation
            'exam_time' => 'required|date_format:H:i', // Added time validation
        ]);
    
        // Find the existing Exam record by its ID
        $getExam = Exam::find($id);
    
        // Check if the record was found
        if (!$getExam) {
            // Handle the case where the record with the given ID doesn't exist
            return redirect('/exam')->with('error', 'Exam not found');
        }
    
        // Update the fields of the existing record
        $getExam->title = $request->input('title');
        $getExam->description = $request->input('description');
        $getExam->exam_date = $request->input('exam_date');
        $getExam->exam_time = $request->input('exam_time');
        $getExam->save();
    
        return redirect('/exam')->with('success', 'Exam updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Exam $exam)
    {
        $exam->delete(); // Delete the specific exam
        return redirect("/exam");
    }
}
