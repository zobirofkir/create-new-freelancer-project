<?php

use App\Http\Controllers\ExamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Exam;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get("/info", [StudentController::class , "create"])->name("store.student");
    Route::post("/info", [StudentController::class , "store"])->name("store.student");

    Route::get("/info/{id}", [StudentController::class, "show"])->name("show.student");

    Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
    Route::delete('/exam/delete/{exam}', [ExamController::class, 'destroy'])->name('exam.destroy');


    Route::get("/exam", [ExamController::class , "index"])->name("exam.index");

    Route::get("/exam/{id}", [ExamController::class, "show"])->name("show.exam");

    Route::get('/search/students', [StudentController::class, "search"])->name('search.students');

    Route::middleware(['admin'])->group(function () {
        Route::get('/students/{id}', [StudentController::class, "edit"])->name('students.edit');
        Route::put('/students/{id}', [StudentController::class, "update"])->name('students.update');

        Route::get("/info/exam/create", [ExamController::class , "create"])->name("exam.create");
        Route::post("/info/exam/create", [ExamController::class , "store"])->name("exam.create");
    
        Route::get('/exam/edit/{id}', [ExamController::class, "edit"])->name('exam.edit');
        Route::put('/exam/edit/{id}', [ExamController::class, "update"])->name('exam.update');
    });
    
    Route::get("/dashboard", [StudentController::class , "index"])->name('dashboard');

});

#guest

Route::get('/', function () {
    return view("welcome");
});

Route::get('/courses', function () {
    return view("home.courses");
});


Route::get('/contact', function () {
    return view("home.contact");
});

