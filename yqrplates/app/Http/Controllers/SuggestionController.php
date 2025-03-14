<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use App\Models\Preference;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SuggestionController extends Controller
{
    public function index(){
        return view('suggestion');
    }
    public function getSuggestion(Request $request): RedirectResponse {
        $user_id = (int)$request->input('user_id');

        $preference = Preference::where('user_id', $user_id)->first();
        $usePrefernece = $request->input("preference", false);
        $restaurants = Restaurant::all();
        $ids = [];
        foreach($restaurants as $restaurant){
            $ids[] = $restaurant->id;
            if($user_id != null && $preference){
            if
            (
                (ucwords($restaurant->food_type) == ucwords($preference->food_type)) 
                && (ucwords($restaurant->price_range) == ucwords($preference->price_range))
                && (($restaurant->south_east && $preference->south_east) || 
                ($restaurant->south_west && $preference->south_west) ||
                ($restaurant->north_east && $preference->north_east) || 
                ($restaurant->north_west && $preference->north_west)) 
                && (($restaurant->dine_in && $preference->dine_in) ||
                ($restaurant->take_out && $preference->take_out) ||
                ($restaurant->delivery && $preference->delivery) ||
                ($restaurant->drive_thru && $preference->drive_thru))
            ) $userRestaurants[] = $restaurant->id;

            }
              
        }
        if($user_id != null && $preference && !empty($userRestaurants)){
        $userRandom = array_rand($userRestaurants);
        $randomUser = $userRestaurants[$userRandom];
        }
        if(empty($userRestaurants) && $user_id != null)
        {
            return redirect('/suggestion')->with('error', 'Sorry, no restaurants match your preference.');
        }
        $randomNum = array_rand($ids);
        $randomRes = $ids[$randomNum];

        if(!$usePrefernece)
        return redirect('restaurants/details/' . $randomRes);
        else
        return redirect('restaurants/details/' . $randomUser);
    }
}