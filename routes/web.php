<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Landing Page
Route::get('/', [HomeController::class, 'index']);

// Login and Registration 
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.login');
Route::get('/registration', [AuthController::class, 'showRegis'])->name('register');
Route::post('/registration', [AuthController::class, 'regis'])->name('auth.register');


Route::middleware('auth')->group(function (){
    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Category Page - Dashboard Admin
    // Route::get('/dashboard/category', [CategoryController::class, 'index'])->name('category');
    // Route::get('/dashboard/category/create', [CategoryController::class, 'create'])->name('category.create');
    // Route::post('/dashboard/category/store', [CategoryController::class, 'store'])->name('category.store');
    // Route::get('/dashboard/category/show/{category}', [CategoryController::class, 'show'])->name('category.show');
    // Route::get('/dashboard/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    // Route::put('/dashboard/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
    // Route::delete('/dashboard/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::resource('dashboard/category', CategoryController::class)->names('category');

    // Product Page - Dashboard Admin
    Route::get('/dashboard/product', [DashboardController::class, 'showTableProduct'])->name('product');
    Route::get('/dashboard/product/create', [DashboardController::class, 'create'])->name('product.create');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
