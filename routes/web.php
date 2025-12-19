<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\User\DashboardControllerU;

Route::get('/', [PublicController::class, 'index'])->name('public.index');

Route::middleware(['auth', 'verified'])->group(function () {
    // Protected routes go here
    Route::name('user.')->group(function () {
        // User-specific routes
        Route::get('home', [DashboardControllerU::class, 'home'])->name('home');
    });
});