<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use Illuminate\Http\Request;

// Home Page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Student Directory (Read)
Route::get('/students', function () {
    $students = Student::all();
    return view('students.index', compact('students'));
})->name('students.index');

// Create Form
Route::get('/students/create', function () {
    return view('students.create');
})->name('students.create');

// Store Data
Route::post('/students', function (Request $request) {
    Student::create($request->all());
    return redirect()->route('students.index');
})->name('students.store');

// View Single Student
Route::get('/students/{id}', function ($id) {
    $student = Student::findOrFail($id);
    return view('students.show', compact('student'));
})->name('students.show');

// Edit Form
Route::get('/students/{id}/edit', function ($id) {
    $student = Student::findOrFail($id);
    return view('students.edit', compact('student'));
})->name('students.edit');

// Update Data
Route::put('/students/{id}', function (Request $request, $id) {
    $student = Student::findOrFail($id);
    $student->update($request->all());
    return redirect()->route('students.index');
})->name('students.update');

// Delete Student
Route::delete('/students/{id}', function ($id) {
    $student = Student::findOrFail($id);
    $student->delete();
    return redirect()->route('students.index');
})->name('students.destroy');