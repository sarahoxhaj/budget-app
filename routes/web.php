<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\GoogleController;

Route::get('/', function () {
    return view('header');
});

Route::get('/registration', [CustomAuthController::class, 'registration']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::post('/datas', [CustomAuthController::class, 'datas'])->name('datas');

Route::get('/getView', [CustomAuthController::class, 'getView'])->name('getView');

Route::get('/budget', [CustomAuthController::class, 'budget'])->name('budget');
Route::get('/getData', [CustomAuthController::class, 'getData'])->name('getData');



//google
Route::prefix('google')->name('google.')->group(function () {
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});
