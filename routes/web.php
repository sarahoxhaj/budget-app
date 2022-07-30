<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

Route::get('/', function () {
    return view('header');
});

Route::get('/registration', [CustomAuthController::class, 'registration']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');
