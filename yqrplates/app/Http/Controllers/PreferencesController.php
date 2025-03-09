<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Preference;


class PreferencesController extends Controller{
    public function index() {
        return view('preferences');
    }

    public function create() {
        return view('createpreferences');
    }

    public function store(Request $request){
        $input = $request->body;;
        $south_east = in_array("South East", $input->neighborhood);
        $south_west = in_array("South West", $input->neighborhood);
        $north_east = in_array("North East", $input->neighborhood);
        $north_west = in_array("North West", $input->neighborhood);

        $dine_in = in_array("Dine In", $input->restaurant_type);
        $take_out = in_array("Take Out", $input->restaurant_type);
        $delivery = in_array("Delivery", $input->restaurant_type);
        $drive_thru = in_array("Drive Thru", $input->restaurant_type);
        
        return Preference::create([
            'user_id' => $input['user_id'],
            'price_range' => $input['price_range'],
            'food_type' => $input['food_type'],
            'south_east' => $south_east,
            'south_west' => $south_west,
            'north_east' => $north_east,
            'north_west' => $north_west,
            'dine_in' => $dine_in,
            'take_out' => $take_out,
            'delivery' => $delivery,
            'drive_thru' => $drive_thru
        ]);
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