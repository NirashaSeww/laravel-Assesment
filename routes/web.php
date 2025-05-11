<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    // Admin
    Route::view('admin/dashboard', 'admin.dashboard')
        ->middleware(['auth', 'verified', 'admin'])
        ->name('admin.dashboard');

    Route::view('admin/person-admin-main', 'admin.person-admin-main')
        ->middleware(['auth', 'verified', 'admin'])
        ->name('admin.person-admin-main');


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
