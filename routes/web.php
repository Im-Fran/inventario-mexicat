<?php

use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', fn() => ['user' => auth()->user()])->name('home');

Route::prefix('/auth')->group(function(){
    Route::prefix('/login')->middleware(['guest'])->group(function() {
        Route::get('/', [Auth\LoginController::class, 'index'])->name('auth.login');
        Route::post('/', [Auth\LoginController::class, 'login'])->name('auth.login');
    });

    Route::get('/logout', Auth\LogoutController::class)->name('auth.logout');
});

Route::get('/bienvenido', function () {
    return view('account.welcome-user');
})->middleware(['auth'])->name('bienvenido');

Route::resource('product', ProductController::class);
