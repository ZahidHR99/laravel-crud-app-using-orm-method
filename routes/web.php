<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [StudentController::class, 'index'])->name('student.index');
Route::post('/store', [StudentController::class, 'store'])->name('student.store');

//01775994070