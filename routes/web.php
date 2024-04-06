<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgetPasswordManager;

Route::get('/', function () {
    return view('layouts.index');
});


// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');


// logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']);

Route::get('/playerinfo', [DonationController::class, 'index'])->name('playerinfo');

Route::get('/aboutus', [AboutusController::class, 'index'])->name('aboutus');

Route::post('/post/{post}/likes', [PostLikeController::class, 'store'])->name('post.like');

Route::delete('/post/{post}/likes', [PostLikeController::class, 'destroy'])->name('post.like');


Route::get('/donation', [DonationController::class, 'index'])->name('donation');

Route::get('/forgot-password', [ForgetPasswordManager::class, 'index'])->name('forgot.password');
Route::post('/forgot-password', [ForgetPasswordManager::class, 'store'])->name('forgot.password.post');

Route::get('/reset-password/{token}', [ForgetPasswordManager::class, 'index'])->name('reset.password');
route::post('/reset-password', [ForgetPasswordManager::class, 'store'])->name('reset.password.post');
