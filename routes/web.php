<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CustomerController;

// Route::get('/', [AuthController::class, 'login']);
// Route::get('login', [AuthController::class, 'login'])->name('login');;
// Route::get('register', [AuthController::class, 'register'])->name('register');;

// Route::group(['namespace' => 'App\Http\Controllers'], function() {   
//     Route::group(['middleware' => ['auth']], function() {
//         Route::get('home', [HomeController::class, 'index']);

//         Route::resource('cars', CarController::class);
//         Route::resource('customers', CustomerController::class);

//         Route::get('/logout', 'AuthController@logout');
//     });
// });

// Route::controller(AuthController::class)->group(function(){

//     Route::get('login', 'login')->name('login');

//     Route::get('register', 'register')->name('registration');

//     Route::post('validate_registration', 'validate_registration')->name('auth.validate_registration');

//     Route::post('validate_login', 'validate_login')->name('auth.validate_login');

// });

// Route::group(['middleware' => ['auth']], function() {
//     // Route::get('home', 'home')->name('home');
//     Route::get('home', 'HomeController@index')->name('home');
//     // Route::get('home', [HomeController::class, 'index']);

//     Route::resource('cars', CarController::class);
//     Route::resource('customers', CustomerController::class);

//     Route::get('logout', 'AuthController@logout')->name('logout');
// });

//Authentication
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('validate_login', [AuthController::class, 'validate_login'])->name('auth.validate_login');
Route::post('validate_registration', [AuthController::class, 'validate_registration'])->name('auth.validate_registration');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//Home
Route::get('home', [HomeController::class, 'index'])->name('home');

//Cars
Route::resource('cars', CarController::class);

//Customers
Route::resource('customers', CustomerController::class);