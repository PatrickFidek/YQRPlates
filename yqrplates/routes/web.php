<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
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