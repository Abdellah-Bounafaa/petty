<?php

use App\Http\Controllers\MembreController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//Home page
Route::get('/', function () {
    return view('index');
});
// contact page
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/about', 'about')->name('about');
Route::view('/vet', 'vet')->name('vet');
Route::view('/pricing', 'pricing')->name('pricing');
Route::view('/blog', 'blog')->name('blog');
Route::view('/profile', 'profile.profile')->name('profile')->middleware('auth');
Route::view('/reset-password', 'authentification.forgot-password')->name('reset-password');
Route::get('/register', [MembreController::class, 'create'])->name('register');
Route::post('/users', [MembreController::class, 'store']);
Route::get('/login', [MembreController::class, 'login'])->name('login');
// logout
Route::post('/logout', [MembreController::class, 'logout'])->middleware('auth');
//login
Route::post('/users/authenticate', [MembreController::class, 'authenticate']);