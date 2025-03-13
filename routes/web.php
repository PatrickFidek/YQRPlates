<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;  // trying this for route[login] issue if causing any problem you can remove
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\PreferencesController;
use App\Http\Controllers\UploadRestaurantController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\PromotionsController;

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

Route::get('/editpreferences', function () {
    return view('editpreferences');
});

Route::get('/suggestion', function () {
    return view('suggestion');
});

Route::get('/editrestaurant', function () {
    return view('editrestaurant');
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

Route::get('/editpreferences', [PreferencesController::class, 'index'])->middleware('auth');
Route::get('/createpreferences', [PreferencesController::class,'create'])->middleware('auth');
Route::post('/updatepreferences', [PreferencesController::class,'update'])->middleware('auth');
Route::post('/storepreferences', [PreferencesController::class,'store'])->middleware('auth');

Route::get('/editrestaurant', [UploadRestaurantController::class, 'index'])->middleware('auth');
Route::get('/createrestaurant', [UploadRestaurantController::class,'create'])->middleware('auth');
Route::post('/updaterestaurant', [UploadRestaurantController::class,'update'])->middleware('auth');
Route::post('/storerestaurant', [UploadRestaurantController::class,'store'])->middleware('auth');

// Auth::routes();  // tried this for route[login] error in my page please let me know if its breaking pages @dharmatejash
// You can not use the Auth::routes() as it gives a call to App\Http\Controllers\Auth\LoginController which we do not have. 
// This will continue to error like this, and the route [login] error can be solved without it. Feel free to message me in 
// the group if you have any further questions - Patrick

Route::get('/promotions', [PromotionsController::class, 'index'])->middleware('auth');
Route::post('/promotions', [PromotionsController::class, 'addPromotion'])->middleware('auth');
Route::delete('/promotions', [PromotionsController::class, 'removePromotion'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'seeDashboard'])->middleware('auth');

Route::get('/suggestion', [SuggestionController::class, 'getSuggestion'])->middleware('auth')->name('suggestion');

Route::post('/register', [RegisterController::class, 'register']);

Route::post('/signin', [SigninController::class, 'signin']);

Route::post('/logout', [SigninController::class, 'logout']);

Route::post('/profile', [ProfileController::class, 'seeProfile'])->middleware('auth');

Route::post('/resetpassword', [ResetPasswordController::class, 'resetPassword']);