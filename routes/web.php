<?php

use App\Http\Controllers\ShusiController;

Route::get('/', [ShusiController::class, 'index'])->name('home');
Route::get('/about', [ShusiController::class, 'about'])->name('about');
Route::get('/menu', [ShusiController::class, 'menu'])->name('menu');
Route::get('/contact', [ShusiController::class, 'contact'])->name('contact');

// Route::get('/', function () {
//     return view('welcome');
// });
