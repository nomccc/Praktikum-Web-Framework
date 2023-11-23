<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/product', [ProductController::class, 'index']);

Route::post('/dashboard', [ProductController::class, 'store']);

Route::post('/login', [AdminController::class, 'login'])->name('login');

Route::post('/registrasi', [AdminController::class, 'register']);

Route::get('/logout', [AdminController::class, 'logout'])->middleware('auth');