<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Preference;
use Illuminate\Validation\Rule;


class PreferencesController extends Controller{
    public function index() {
        return view('editpreferences');
    }

    public function create() {
        return view('createpreferences');
    }

    public function store(Request $request){
        $south_east = in_array("South East", $request->input('neighborhood'));
        $south_west = in_array("South West", $request->input('neighborhood'));
        $north_east = in_array("North East", $request->input('neighborhood'));
        $north_west = in_array("North West", $request->input('neighborhood'));

        $dine_in = in_array("Dine In", $request->input('restaurant_type'));
        $take_out = in_array("Take Out", $request->input('restaurant_type'));
        $delivery = in_array("Delivery", $request->input('restaurant_type'));
        $drive_thru = in_array("Drive Thru", $request->input('restaurant_type'));
        
        Preference::create([
            'user_id' => (int)$request->input('user_id'),
            'price_range' => $request->input('price_range'),
            'food_type' => $request->input('food_type'),
            'south_east' => $south_east,
            'south_west' => $south_west,
            'north_east' => $north_east,
            'north_west' => $north_west,
            'dine_in' => $dine_in,
            'take_out' => $take_out,
            'delivery' => $delivery,
            'drive_thru' => $drive_thru
        ]);

        return redirect('profile');
    }

    public function update(Request $request) {
        $fields = $request->validate($request, [
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
    }
}