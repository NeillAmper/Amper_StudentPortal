<?php

use Illuminate\Support\Facades\Route;

// Dynamic Student Data Source
$getStudents = function () {
    return [
        501 => ['id' => 501, 'name' => 'Arthur Curry', 'email' => 'aquaman@atlantis.edu', 'course' => 'BS Marine Biology', 'year' => '4'],
        502 => ['id' => 502, 'name' => 'Diana Prince', 'email' => 'diana@themyscira.org', 'course' => 'AB History', 'year' => '5'],
        503 => ['id' => 503, 'name' => 'Barry Allen', 'email' => 'flash@central.edu', 'course' => 'BS Forensic Science', 'year' => '2'],
        504 => ['id' => 504, 'name' => 'Victor Stone', 'email' => 'cyborg@tech.edu', 'course' => 'BS Cybernetics', 'year' => '3'],
    ];
};

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/students', function () use ($getStudents) {
    return view('students.index', ['students' => $getStudents()]);
})->name('students.index');

Route::get('/students/create', function () {
    return view('students.create');
})->name('students.create');

Route::get('/students/{id}', function ($id) use ($getStudents) {
    $student = $getStudents()[$id] ?? abort(404);
    return view('students.show', compact('student'));
})->name('students.show');

Route::get('/students/{id}/edit', function ($id) use ($getStudents) {
    $student = $getStudents()[$id] ?? abort(404);
    return view('students.edit', compact('student'));
})->name('students.edit');