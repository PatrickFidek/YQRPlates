<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class UploadRestaurant extends Controller
{
    public function index() {
        return view('uploadrestaurant');
    }

    
    public function store(Request $request){
        $restaurant = $request->validate([
            'name' => ['required|string|max:255', Rule::unique('restaurants', 'name')],
            'user_id' => 'required|exists:users,id',
            'menu_link' => 'required|url',
            'restaurant_type' => 'required|string|max:255',
            'price_range' => 'required|string|max:255',
            'south_east' => 'boolean',
            'south_west' => 'boolean',
            'north_west' => 'boolean',
            'north_east' => 'boolean',
            'dine_in' => 'boolean',
            'take_out' => 'boolean',
            'delivery' => 'boolean',
            'drive_thru' => 'boolean',
        ]);  

        $restaurant = Restaurant::create($restaurant);
    }
}
