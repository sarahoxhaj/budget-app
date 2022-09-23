<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\SocialiteAuth;

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
Route::get('/transView', [CustomAuthController::class, 'transView'])->name('transView');
Route::post('/transaction', [CustomAuthController::class, 'transaction'])->name('transaction');
Route::get('/details', [CustomAuthController::class, 'details'])->name('details');
Route::get('/statistics', [CustomAuthController::class, 'statistics'])->name('statistics');

//github auth
Route::get('/auth/github/redirect', [SocialiteAuth::class, 'redirect'])->name('redirect');
Route::get('/auth/github/callback', [SocialiteAuth::class, 'callback'])->name('callback');

//google auth
Route::get('auth/google', [SocialiteAuth::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [SocialiteAuth::class, 'handleGoogleCallback']);
