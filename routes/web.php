<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use Illuminate\Http\Request;

// Home
Route::get('/', function () { 
    return view('welcome'); 
})->name('home');

// READ: Fetch from Database
Route::get('/students', function () {
    $students = Student::all(); 
    return view('students.index', compact('students'));
})->name('students.index');

// CREATE: Show Form
Route::get('/students/create', function () { 
    return view('students.create'); 
})->name('students.create');

// STORE: Save to Database (This was missing!)
Route::post('/students', function (Request $request) {
    Student::create($request->all());
    return redirect()->route('students.index');
})->name('students.store');

// SHOW: Individual Profile
Route::get('/students/{id}', function ($id) {
    $student = Student::findOrFail($id);
    return view('students.show', compact('student'));
})->name('students.show');

// EDIT: Show Update Form
Route::get('/students/{id}/edit', function ($id) {
    $student = Student::findOrFail($id);
    return view('students.edit', compact('student'));
})->name('students.edit');

// UPDATE: Save Changes (This was missing!)
Route::put('/students/{id}', function (Request $request, $id) {
    $student = Student::findOrFail($id);
    $student->update($request->all());
    return redirect()->route('students.index');
})->name('students.update');