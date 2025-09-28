<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;

// Homepage (Guest)
Route::get('/', [PageController::class, 'index'])->name('homepage');

// Auth (Login & Logout)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Admin Area (Butuh Login)
Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
    return redirect()->route('gallery.index');
})->name('admin.dashboard');

    Route::resource('/admin/gallery', GalleryController::class);
});
