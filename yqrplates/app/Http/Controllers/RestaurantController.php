<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
class RestaurantController extends Controller
{
    public function index()
    {
        // Retrieve all restaurants with related preferences
        $restaurants = Restaurant::with([
            'priceRanges',
            'restaurantTypes',
            'neighborhoods',
            'foodTypes'
        ])->get();

        return response()->json($restaurants);
    }
}
