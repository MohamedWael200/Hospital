<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/',[\App\Http\Controllers\ClinicsController::class,'clinics'])->name('clinic');
Route::get('/addDoctor',[\App\Http\Controllers\DoctorsController::class,'showAdd'])->name('showAdd');
Route::post('/doctorsInfo',[\App\Http\Controllers\DoctorsController::class,'doctorsInfo'])->name('doctorsInfo');



Route::get('DoctorOfClinic/{id}',
    [\App\Http\Controllers\DoctorsController::class,'DoctorOfClinic'])->name('Dclinic');


Route::get('/book/{id}',[\App\Http\Controllers\ProgramsController::class,'ShowPrograms'])->name('showProgram');
Route::post('/SaveProgram',[\App\Http\Controllers\ProgramsController::class,'session'])->name('session');


Route::get('/success',[\App\Http\Controllers\ProgramsController::class,'success'])->name('success');


//Contact Route
Route::get('/contact',[\App\Http\Controllers\ReviewController::class,'showFormReview'])->name('ReviewForm');
Route::post('/SaveReview',[\App\Http\Controllers\ReviewController::class,'SaveReview'])->name('SaveReview');


//About Page
Route::get('/about',[\App\Http\Controllers\ClinicsController::class,'about'])->name('about');

//Service Page
Route::get('/services',[\App\Http\Controllers\ClinicsController::class,'service'])->name('service');

//Price Page
Route::get('/price',[\App\Http\Controllers\ClinicsController::class,'price'])->name('price');

//Show Clinic Form
Route::get('/addClinic',[\App\Http\Controllers\ClinicsController::class,'addClinic'])->name('addClinic');
Route::post('/SaveClinic',[\App\Http\Controllers\ClinicsController::class,'saveClinic'])->name('saveClinic');

//Admin DashBoard
Route::get('/AdminDasboard',[\App\Http\Controllers\ClinicsController::class,'AdminDasboard'])->name('AdminDasboard');

//Show Program Form
Route::get('/ShowSurgery',[\App\Http\Controllers\ProgramsController::class,'ShowSurgery'])->name('ShowSurgery');
Route::post('/SaveSurgery',[\App\Http\Controllers\ProgramsController::class,'SaveSurgery'])->name('SaveSurgery');
