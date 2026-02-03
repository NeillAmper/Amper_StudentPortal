<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use Illuminate\Http\Request;

// 1. Home Page
Route::get('/', function () { 
    return view('welcome'); 
})->name('home');

// 2. Read: Display all students
Route::get('/students', function () {
    $students = Student::all(); 
    return view('students.index', compact('students'));
})->name('students.index');

// 3. Create: Show the Form
Route::get('/students/create', function () { 
    return view('students.create'); 
})->name('students.create');

// 4. Store: Process the form
Route::post('/students', function (Request $request) {
    Student::create($request->all());
    return redirect()->route('students.index');
})->name('students.store');

// 5. Show: View individual student
Route::get('/students/{id}', function ($id) {
    $student = Student::findOrFail($id);
    return view('students.show', compact('student'));
})->name('students.show');