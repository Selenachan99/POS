<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Categories;
use Illuminate\Support\Facades\Product;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index']);
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');

Route::resource('categories', \App\Http\Controllers\CategoryController::class);
Route::resource('product', \App\Http\Controllers\ProductController::class);


// Route::get('user', [\App\Http\Controllers\UserController::class, 'index']);
// Route::get('user.create', [\App\Http\Controllers\UserController::class, 'create']);
// Route::get('user.store', [\App\Http\Controllers\UserController::class, 'store']);

