<?php

use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => ['user' => auth()->user()])->name('home');

Route::prefix('/auth')->group(function(){
    Route::prefix('/login')->middleware(['guest'])->group(function() {
        Route::get('/', [Auth\LoginController::class, 'index'])->name('auth.login');
        Route::post('/', [Auth\LoginController::class, 'login'])->name('auth.login');
    });

    Route::get('/logout', Auth\LogoutController::class)->name('auth.logout');
});
