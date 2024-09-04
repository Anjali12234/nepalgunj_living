<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\PostAddController;
use App\Http\Controllers\PropertyListController;
use App\Http\Controllers\RegisteredUserDetailController;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', [RegisteredUserDetailController::class, 'index'])->name('dashboard');
Route::resource('profile', RegisteredUserDetailController::class);
Route::get('/postAdd', [PostAddController::class, 'index'])->name('postAdd');
Route::get('/propertyList/{subCategory:slug}', [PropertyListController::class, 'create'])->name('property');
Route::post('/propertyList/{subCategory:slug}', [PropertyListController::class, 'store'])->name('property.store');

Route::post('destroyImage/{registeredUser}/{registeredUserDetail}', [RegisteredUserDetailController::class, 'destroyImage'])->name('destroyImage');
Route::prefix('file')->as('file.')->controller(FileController::class)->group(function () {
    Route::delete('{file}/delete', 'destroy')->name('destroy');
});
