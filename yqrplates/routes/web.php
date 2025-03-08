<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\PreferencesController;
use App\Http\Controllers\ResetPasswordController;

Route::get('/', function () {
    return view('app');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/restaurants', function () {
    return view('restaurants');
});

Route::get('/restaurantdetails', function () {
    return view('restaurantdetails');
});

Route::get('/signin', function () {
    return view('signin');
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

Route::get('/restaurants', [RestaurantController::class, 'seeRestaurants']);

Route::get('/preferences', [PreferencesController::class, 'index'])->middleware('auth');

Route::post('/register', [RegisterController::class, 'register']);

Route::post('/signin', [SigninController::class, 'signin']);

Route::post('/logout', [SigninController::class, 'logout']);

Route::post('/profile', [ProfileController::class, 'seeProfile'])->middleware('auth');

Route::post('/resetpassword', [ResetPasswordController::class, 'resetPassword']);