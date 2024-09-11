<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PostAdController;
use App\Http\Controllers\PropertyListController;
use App\Http\Controllers\RegisteredUserDetailController;
use App\Http\Controllers\UserDashboardController;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', [RegisteredUserDetailController::class, 'index'])->name('dashboard');
Route::resource('profile', RegisteredUserDetailController::class);
// Route::get('postAdd', [PostAddController::class, 'index'])->name('postAdd');
Route::resource('postAd', PostAdController::class);
Route::get(
    '/propertyList/{subCategory:slug}',
    [PropertyListController::class, 'create']
)->name('property');
Route::post('/propertyList/{subCategory:slug}', [PropertyListController::class, 'store'])->name('property.store');
// Route::group(['prefix' => 'propertyList/{subCategory:slug}'], function() {
//     Route::resource('/', PropertyListController::class);
// });
Route::get('propertyLists/{subCategory:slug}/{propertyList}/edit', [PropertyListController::class, 'edit'])
    ->name('propertyLists.edit');
Route::put('propertyLists/{propertyList}', [PropertyListController::class, 'update'])
    ->name('propertyLists.update');
Route::get('propertyLists', [PropertyListController::class, 'index'])->name('property/propertyLists');

Route::delete('propertyLists/{propertyList}', [PropertyListController::class, 'destroy'])->name('propertyList.destroy');



Route::group(['prefix' => '{subCategory:slug}'], function () {
    Route::resource('doctorList', DoctorController::class);
});
Route::get('doctorLists', [DoctorController::class, 'index'])->name('doctor/doctorLists');

Route::put('doctorLists/{doctorList}', [DoctorController::class, 'update'])
    ->name('doctorLists.update');

Route::get('healthCare', [DoctorController::class, 'index'])->name('halthCare');
Route::post('destroyImage/{registeredUser}/{registeredUserDetail}', [RegisteredUserDetailController::class, 'destroyImage'])->name('destroyImage');
Route::prefix('file')->as('file.')->controller(FileController::class)->group(function () {
    Route::delete('{file}/delete', 'destroy')->name('destroy');
});

Route::controller(UserDashboardController::class)->group(function () {
    Route::get('timeline', 'timeline')->name('timeline');
    // Route::get('posts','posts')->name('posts');
    // Route::get('propertyList',[UserDashboardController::class,'posts'])->name('propertyList');
});
