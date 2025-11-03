<?php

use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'landingpage')->name('home');
Route::view('/login', 'Authcustom.login')->name('login');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::view('/dashboard', 'donor.dashboard')->name('dashboard');

/*
|--------------------------------------------------------------------------
| Settings Routes
|--------------------------------------------------------------------------
*/

Route::prefix('settings')->group(function () {
    Route::get('/profile', Profile::class)->name('profile.edit');
});

