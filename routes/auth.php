<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\AuthRegisteredUserController;
use Illuminate\Support\Facades\Route;



Route::controller(AuthRegisteredUserController::class)->group(function () {

    Route::prefix('user')->group(function () {
        Route::get('register','registerPage')->name('register');
        Route::post('register','register')->name('register');
        Route::post('login','login')->name('userlogin');
    });
});
