<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Preference;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class DashboardController extends Controller
{

    public function indexRestaurants()
    {
        $restaurants = Restaurant::all();
        return view('dashboard', compact('restaurants'));
    }

    public function indexPreferences()
    {
        $preferences = Preference::all();
        return view('dashboard', compact('preferences'));
    }

    public function seeDashboard() {
        $restaurants = Restaurant::all();
        $preferences = Preference::all();
        return view('dashboard', compact('preferences', 'restaurants'));

    }

    public function viewMatches(Request $request)  {

        $storedRestaurants = Restaurant::all();
        $restaurants = [];
        $matches = collect(json_decode($request->input("matches"), true));
        foreach($storedRestaurants as $restaurant){
            foreach ($matches as $match) {
                if ($match['name'] == $restaurant->name){
                $restaurants[] = $restaurant;
                }
        }
    }
        
        return view('restaurants.index', compact('restaurants'));
    }
}
