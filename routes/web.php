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
Route::get('/Students', [Students::class, 'index'])->name('students.index');

// College Routes
Route::get('/Colleges', [Colleges::class, 'index'])->name('colleges.index');

Route::get('/Colleges/Create', [Colleges::class, 'create'])->name('colleges.create');

Route::get('/Colleges/Edit/{id}', [Colleges::class, 'edit'])->name('colleges.edit');

Route::post('/Colleges', [Colleges::class, 'store'])->name('colleges.store');

Route::put('/Colleges/{id}', [Colleges::class, 'update'])->name('colleges.update');

Route::delete('/Colleges/{id}', [Colleges::class, 'destroy'])->name('colleges.destroy');
