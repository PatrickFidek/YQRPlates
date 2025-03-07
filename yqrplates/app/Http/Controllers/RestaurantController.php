<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
class RestaurantController extends Controller
{
    public function seeRestaurants()
    {

        

        return view('restaurants');
    }
}
