<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/registration', [AuthController::class, 'showRegis'])->name('register');
