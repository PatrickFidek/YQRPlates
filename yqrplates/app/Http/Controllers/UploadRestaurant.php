<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\UploadRestaurantModel;
use App\Models\Restaurant;

class UploadRestaurant extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
            'menu_link' => 'required|url',
            'restaurant_type' => 'required|array',
            'price_range' => 'required|array',
            'neighborhood' => 'required|array',
            'food_type' => 'required|array'
        ]);  
        

        $restaurant = Restaurant::create([
            'user_id' => $request['user_id'],
            'name' => $request['name'],
            'menu_link' => $request['menu_link'],
        ]);

        foreach ($request['price_range'] as $priceRangeName) {
            $price_range_id = DB::table('price_ranges')->where('range_label', $priceRangeName);

        }

        foreach ($request['food_type'] as $foodTypeName) {
            $price_range_id = DB::table('food_types')->where('type_name', $foodTypeName);

        }

        foreach ($request['neighborhood'] as $neighborhoodName) {
            $price_range_id = DB::table('neighborhoods')->where('name', $neighborhoodName);

        }

        foreach ($request['restaurant_type'] as $restaurantTypeName) {
            $price_range_id = DB::table('restaurant_types')->where('name', $restaurantTypeName);

        }

    }
}
