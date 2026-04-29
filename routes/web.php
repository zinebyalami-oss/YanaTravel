<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [ClientAuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [ClientAuthController::class, 'register']);
    Route::get('/login', [ClientAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [ClientAuthController::class, 'login']);
});

Route::post('/logout', [ClientAuthController::class, 'logout'])->name('logout')->middleware('auth');
