<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurants.index', compact('restaurants'));
    }

    public function details(Restaurant $restaurantid)
    {
        $restaurant = Restaurant::find(2);
        return view('restaurants.details', compact('restaurant'));
    }
}