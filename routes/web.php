<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\AuthRegisteredUserController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;




Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('about', 'about')->name('about');

});

require __DIR__.'/auth.php';


Route::get('login', [AuthController::class, 'loginPage'])
    ->name('login');

Route::post('login', [AuthController::class, 'login']);


Route::post('logout', [AuthController::class, 'destroy'])
->name('logout');
