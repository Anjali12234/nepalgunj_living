<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\AuthRegisteredUserController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;




Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/properties/{subCategorySlug?}', 'properties')->name('properties');
    Route::get('test', 'test')->name('test');
    Route::get('propertyList/{propertyList:slug}', 'propertyDetails')->name('propertyDetails');
    Route::get('about', 'about')->name('about');
    Route::get('vehicles', 'vehicles')->name('vehicles');
    Route::get('healthCare','healthcareIndex')->name('healthcareIndex');
    Route::get('doctorlist','listPage')->name('healthcare.listPage');

});

require __DIR__.'/auth.php';


Route::get('login', [AuthController::class, 'loginPage'])
    ->name('login');

Route::post('login', [AuthController::class, 'login']);


Route::post('logout', [AuthController::class, 'destroy'])
->name('logout');

Route::controller(AuthRegisteredUserController::class)->group(function () {

    Route::prefix('user')->group(function () {
        Route::get('register','registerPage')->name('register');
        Route::post('register','register')->name('register');
        Route::post('login','login')->name('userlogin');
    });
});



