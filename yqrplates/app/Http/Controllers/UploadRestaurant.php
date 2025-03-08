<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadRestaurant extends Controller
{
    public function store(Request $request){
        $request->validate(){
            'name' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
            'menu_link' => 'required|url',
            'restaurant_type' => 'required|array',
            'price_range' => 'required|array',
            'neighborhood' => 'required|array',
            'food_type' => 'required|array',
            
        }

        $restaurant = Restaurant::create([
            'user_id' => $validated['user_id'],
            'name' => $validated['name'],
            'menu_link' => $validated['menu_link'],
        ]);
    }
}
