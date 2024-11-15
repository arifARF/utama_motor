<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('pelanggan')->group(function () {
    Route::get('/', function () {
        return view('pelanggan.index');
    })->name('pelanggan.index');
});

Route::prefix('motor')->group(function () {
    Route::get('/', function () {
        return view('motor.index');
    })->name('motor.index');
});

Route::prefix('servis')->group(function () {
    Route::get('/', function () {
        return view('servis.index');
    })->name('servis.index');
});

Route::prefix('laporan')->group(function () {
    Route::get('/', function () {
        return view('laporan.index');
    })->name('laporan.index');
});

Route::prefix('pengaturan')->group(function () {
    Route::get('/', function () {
        return view('pengaturan.index');
    })->name('pengaturan.index');
});

