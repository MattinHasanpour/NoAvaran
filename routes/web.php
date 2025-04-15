<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/register', [AuthController::class , 'register'])->name('register');
Route::post('/register', [AuthController::class , 'registerPost'])->name('register.post');

Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'loginPost'])->name('login.post');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/posts', [PostController::class , 'index'])->name('posts.index')->middleware('auth');

Route::get('/forget-password', [ForgetPasswordController::class , 'forgetPassword'])->name('forgetPassword');
Route::post('/forget-password', [ForgetPasswordController::class , 'forgetPasswordPost'])->name('forget.password.post');
Route::get('/reset-password/{token}', [ForgetPasswordController::class , 'resetPassword'])->name('reset.password');
Route::post('/reset-password', [ForgetPasswordController::class , 'resetPasswordPost'])->name('reset.password.post');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/example', function () {
    return view('example');
})->name('example');
Route::get('/services', function () {
    return view('services');
})->name('services');