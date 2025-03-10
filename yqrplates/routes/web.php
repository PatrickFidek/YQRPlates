<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\PreferencesController;
use App\Http\Controllers\UploadRestaurant;
use App\Http\Controllers\ResetPasswordController;

Route::get('/', function () {
    return view('app');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/resetpassword', function () {
    return view('resetpassword');
});

Route::get('/preferences', function () {
    return view('preferences');
});

Route::get('/suggestion', function () {
    return view('suggestion');
});

Route::get('/uploadrestaurant', function () {
    return view('uploadrestaurant');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/passwordreset', function () {
    return view('passwordreset');
});

Route::get('/promotions', function () {
    return view('promotions');
});

Route::get('/restaurants', [RestaurantController::class, 'index'])->name('restaurants.index');
Route::get('/restaurants/details/{restaurantid}', [RestaurantController::class, 'details'])->name(name: 'restaurants.details');

Route::get('/preferences', [PreferencesController::class, 'index'])->middleware('auth');
Route::get('/createpreferences', [PreferencesController::class,'create'])->middleware('auth');
Route::post('/updatepreferences', [PreferencesController::class,'update'])->middleware('auth');
Route::post('/storepreferences', [PreferencesController::class,'store'])->middleware('auth');

Route::get('/uploadrestaurant', [UploadRestaurant::class, 'index'])->middleware('auth');
Route::get('/createrestaurant', [UploadRestaurant::class,'create'])->middleware('auth');
Route::post('/updaterestaurant', [UploadRestaurant::class,'update'])->middleware('auth');
Route::post('/storerestaurant', [UploadRestaurant::class,'store'])->middleware('auth');

Route::post('/register', [RegisterController::class, 'register']);

Route::post('/signin', [SigninController::class, 'signin']);

Route::post('/logout', [SigninController::class, 'logout']);

Route::post('/profile', [ProfileController::class, 'seeProfile'])->middleware('auth');

Route::post('/resetpassword', [ResetPasswordController::class, 'resetPassword']);