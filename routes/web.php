<?php

use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'landingpage')->name('home');
Route::view('/login', 'Authcustom.login')->name('login');
Route::view('/register', 'Authcustom.register')->name('register');
Route::view('/dashboard', 'donor.dashboard')->name('dashboard');

/*
|--------------------------------------------------------------------------
| Settings Routes
|--------------------------------------------------------------------------
*/

Route::prefix('settings')->group(function () {
    Route::get('/profile', Profile::class)->name('profile.edit');
});

