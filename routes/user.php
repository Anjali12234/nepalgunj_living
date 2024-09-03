<?php

use App\Http\Controllers\PostAddController;
use App\Http\Controllers\RegisteredUserDetailController;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', [RegisteredUserDetailController::class, 'index'])->name('dashboard');
Route::resource('profile', RegisteredUserDetailController::class);
Route::get('/postAdd', [PostAddController::class, 'index'])->name('postAdd');
Route::post('destroyImage/{registeredUser}/{registeredUserDetail}', [RegisteredUserDetailController::class, 'destroyImage'])->name('destroyImage');
