<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RentCarController;

//Authentication
// Route::get('login', [AuthController::class, 'login'])->name('login');
// Route::get('register', [AuthController::class, 'register'])->name('register');
// Route::post('validate_authenticate', [AuthController::class, 'authenticate'])->name('auth.validate_authenticate');
// Route::post('validate_registration', [AuthController::class, 'validate_registration'])->name('auth.validate_registration');
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//Home
Route::get('home', [HomeController::class, 'index'])->name('home'); //->middleware('auth');

//Cars
Route::resource('cars', CarController::class); //->middleware('auth');

//Customers
Route::resource('customers', CustomerController::class); //->middleware('auth');

//Rent Car
Route::get('rent_a_car', [RentCarController::class, 'index'])->name('rent_a_car'); //->middleware('auth');
Route::get('rent', [RentCarController::class, 'create'])->name('rent'); //->middleware('auth');