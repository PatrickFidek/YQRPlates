<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Preference;

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
}
