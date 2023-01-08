<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CustomerController;

Route::get('/', [AuthController::class, 'login']);
Route::get('login', [AuthController::class, 'login'])->name('login');;
Route::get('register', [AuthController::class, 'register'])->name('register');;

// Route::group(['namespace' => 'App\Http\Controllers'], function() {   
//     Route::group(['middleware' => ['auth']], function() {
//         Route::get('home', [HomeController::class, 'index']);

//         Route::resource('cars', CarController::class);
//         Route::resource('customers', CustomerController::class);

//         Route::get('/logout', 'AuthController@logout');
//     });
// });