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
