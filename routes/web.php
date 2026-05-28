<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.login');
Route::get('/registration', [AuthController::class, 'showRegis'])->name('register');
Route::post('/registration', [AuthController::class, 'regis'])->name('auth.register');


Route::middleware('auth')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/dashboard/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/dashboard/product', [DashboardController::class, 'showTableProduct'])->name('product');
    Route::get('/dashboard/product/create', [DashboardController::class, 'create'])->name('product.create');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
