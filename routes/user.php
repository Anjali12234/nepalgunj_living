<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\PharmacyController;
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


Route::group(['prefix' => '{subCategory:slug}'], function () {
    Route::resource('hospitalList', HospitalController::class);
});
Route::get('hospitalLists', [HospitalController::class, 'index'])->name('hospital/hospitalLists');
Route::put('hospitalLists/{hospitalList}', [HospitalController::class, 'update'])
    ->name('hospitalLists.update');


Route::group(['prefix' => '{subCategory:slug}'], function () {
    Route::resource('medicalList', MedicalController::class);
});
Route::get('medicalLists', [MedicalController::class, 'index'])->name('medical/medicalLists');
Route::put('medicalLists/{medicalList}', [MedicalController::class, 'update'])
    ->name('medicalLists.update');


Route::group(['prefix' => '{subCategory:slug}'], function () {
    Route::resource('pharmacyList', PharmacyController::class);
});
Route::get('pharmacyLists', [PharmacyController::class, 'index'])->name('pharmacy/pharmacyLists');
Route::put('pharmacyLists/{pharmacyList}', [PharmacyController::class, 'update'])
    ->name('pharmacyLists.update');


Route::get('healthCare', [DoctorController::class, 'index'])->name('halthCare');

Route::prefix('file')->as('file.')->controller(FileController::class)->group(function () {
    Route::delete('{file}/delete', 'destroy')->name('destroy');
});

Route::controller(UserDashboardController::class)->group(function () {
    Route::get('timeline', 'timeline')->name('timeline');
    // Route::get('posts','posts')->name('posts');
    // Route::get('propertyList',[UserDashboardController::class,'posts'])->name('propertyList');
});
