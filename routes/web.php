<?php

use App\Http\Controllers\ClientAuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/nosVoyages', [VoyageController::class, 'index'])->name('voyages.index');
Route::get('/voyages/{id}', [VoyageController::class, 'show'])->name('voyages.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/demande', [ContactController::class, 'store'])->name('demande.store');
Route::get('/about', function () {
    return view('about');
})->name('about');

// Authentification (guest seulement)
Route::middleware('guest')->group(function () {
    Route::get('/login', [ClientAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [ClientAuthController::class, 'login']);
    Route::get('/register', [ClientAuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [ClientAuthController::class, 'register']);
});

// Déconnexion (auth requise)
Route::post('/logout', [ClientAuthController::class, 'logout'])->name('logout')->middleware('auth');

// Admin Dashboard (auth + admin middleware)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});