<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RegisteredUserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::prefix('settings')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('subCategory', SubCategoryController::class);
    Route::resource('setting', SettingController::class);
});
Route::prefix('registerdUser')->group(function () {
    Route::resource('registeredUser', RegisteredUserController::class);
    Route::put('registeredUser/{registeredUser}/updateStatus', [RegisteredUserController::class, 'updateStatus'])->name('registeredUser.updateStatus');
});
