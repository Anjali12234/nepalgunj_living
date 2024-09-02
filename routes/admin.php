<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingController;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::prefix('settings')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('setting', SettingController::class);
});
