<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\AuthRegisteredUserController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;




Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('newsDetail','newsDetail')->name('newsDetail');
    Route::get('/properties/{subCategorySlug?}', 'properties')->name('properties');
    Route::get('/properties/{subCategorySlug?}', 'subCategory')->name('properties');
    Route::get('test', 'test')->name('test');
    Route::get('propertyList/{propertyList:slug}', 'propertyDetails')->name('propertyDetails');
    Route::get('about', 'about')->name('about');
    Route::get('vehicles', 'vehicles')->name('vehicles');
    Route::get('healthCare','healthcareIndex')->name('healthcareIndex');
    Route::get('doctorlist','listPage')->name('healthcare.listPage');
    Route::get('mediaclstoreList','medicallistPage')->name('healthcare.medicallistPage');
    Route::get('doctorDetailpage','doctorDetailPage')->name('healthcare.doctorDetailPage');
    Route::get('medicalListPage','medicalListPage')->name('healthcare.medicalListPage');
    Route::get('medicalDetailpage','medicalDetailPage')->name('healthcare.medicalDetailPage');
    Route::get('hospitalListPage','hospitalListPage')->name('healthcare.hospitalListPage');
    Route::get('hospitalDetailPage','hospitalDetailPage')->name('healthcare.hospitalDetailPage');
    Route::get('pharmacyListPage','pharmacyListPage')->name('healthcare.pharmacyListPage');
    Route::get('pharmacyDetailPage','pharmacyDetailPage')->name('healthcare.pharmacyDetailPage');
    Route::get('education','educationIndexPage')->name('education.IndexPage');
    Route::get('campusList','campusListPage')->name('education.campusListpage');
    Route::get('campusDetail','campusDetailPage')->name('education.campusDetailPage');
    Route::get('collegeList','collegeListPage')->name('education.collegeListPage');
    Route::get('collegeDetail','collegeDetailPage')->name('education.collegeDetailPage');
    Route::get('schoolList','schoolListPage')->name('education.schoolListPage');
    Route::get('schoolDetail','schoolDetailPage')->name('education.schoolDetailPage');
    Route::get('consultancyList','consultancyListPage')->name('education.consultancyListPage');
    Route::get('consultancyDetail','consultancyDetailPage')->name('education.consultancyDetailPage');
    Route::get('instituteList','instituteListPage')->name('education.instituteListPage');
    Route::get('instituteDetail','instituteDetailPage')->name('education.instituteDetailPage');


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



Route::prefix('file')->as('file.')->controller(FileController::class)->group(function () {
    Route::delete('{file}/delete', 'destroy')->name('destroy');
});
