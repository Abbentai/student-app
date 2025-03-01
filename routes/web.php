<?php

use App\Http\Controllers\Colleges;
use App\Http\Controllers\Students;
use Illuminate\Support\Facades\Route;

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

// Root
Route::get('/', function () {
    return view('home');
});

// Student Routes

//Returns view all students page
Route::get('/Students', [Students::class, 'index'])->name('students.index');

//Returns student creation page
Route::get('/Students/Create', [Students::class, 'create'])->name('students.create');

//Returns student editing page based on the id
Route::get('/Students/Edit/{id}', [Students::class, 'edit'])->name('students.edit');

//Posts a new student to db
Route::post('/Students', [Students::class, 'store'])->name('students.store');

//Updates an existing student based on id to db
Route::put('/Students/{id}', [Students::class, 'update'])->name('students.update');

//Destroys a student based on the id
Route::delete('/Students/{id}', [Students::class, 'destroy'])->name('students.destroy');


// College Routes

//Returns view all colleges page
Route::get('/Colleges', [Colleges::class, 'index'])->name('colleges.index');

//Returns college creation page
Route::get('/Colleges/Create', [Colleges::class, 'create'])->name('colleges.create');

//Returns college editing page based on the id
Route::get('/Colleges/Edit/{id}', [Colleges::class, 'edit'])->name('colleges.edit');

//Posts a new college to db
Route::post('/Colleges', [Colleges::class, 'store'])->name('colleges.store');

//Updates an existing college based on id to db
Route::put('/Colleges/{id}', [Colleges::class, 'update'])->name('colleges.update');

//Destroys a college based on the id
Route::delete('/Colleges/{id}', [Colleges::class, 'destroy'])->name('colleges.destroy');
