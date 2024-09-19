<?php

use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PropertyListController;
use App\Http\Controllers\Admin\RegisteredUserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\MailController;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::prefix('settings')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('subCategory', SubCategoryController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('branch', BranchController::class);
});
Route::resource('newsCategory', NewsCategoryController::class);
Route::resource('newsList', NewsController::class);


Route::prefix('registerdUser')->group(function () {
    Route::resource('registeredUser', RegisteredUserController::class);
    Route::put('registeredUser/{registeredUser}/updateStatus', [RegisteredUserController::class, 'updateStatus'])->name('registeredUser.updateStatus');
});

// Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
// Route::patch('profile/update', [ProfileController::class, 'updateProfile'])->name('updateProfile');
// Route::patch('password/update', [ProfileController::class, 'updatePassword'])->name('updatePassword');

Route::resource('propertyList', PropertyListController::class);
Route::put('propertyList/{propertyList}/updatePropertyListFeatured', [PropertyListController::class, 'updatePropertyListFeatured'])->name('propertyList.updatePropertyListFeatured');
Route::put('propertyList/{propertyList}/updatePropertyListStatus', [PropertyListController::class, 'updatePropertyListStatus'])->name('propertyList.updatePropertyListStatus');

