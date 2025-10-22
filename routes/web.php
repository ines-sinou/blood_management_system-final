<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'landingpage')->name('home');

Route::view('/login', 'Authcustom.login')->name('login');
Route::view('/register', 'Authcustom.register')->name('register');

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::prefix('settings')->group(function () {
        Route::redirect('/', '/settings/profile');

        Route::get('/profile', Profile::class)->name('profile.edit');
        Route::get('/password', Password::class)->name('user-password.edit');
        Route::get('/appearance', Appearance::class)->name('appearance.edit');

        Route::get('/two-factor', TwoFactor::class)
            ->middleware(
                when(
                    Features::canManageTwoFactorAuthentication()
                        && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                    ['password.confirm'],
                    [],
                ),
            )
            ->name('two-factor.show');
    });
});
