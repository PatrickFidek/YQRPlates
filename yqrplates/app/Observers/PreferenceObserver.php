<?php

namespace App\Observers;

use App\Models\Preference;
use App\Models\Restaurant;
use App\Models\User;

class PreferenceObserver
{
    /**
     * Handle the Preference "created" event.
     */
    public function created(Preference $preference): void
    {
        $restaurants = Restaurant::all();

        $food_types = 0;
        $restaurant_types = 0;
        $neighborhoods = 0;
        $price_ranges = 0;

        foreach($restaurants as $restaurant){
        if($restaurant->food_type == $preference->food_type)
            $food_types++;
        if($restaurant->price_range == $preference->price_range)
                $price_ranges++;
        if($restaurant->south_west && $preference->south_west)
                $neighborhoods++;
        elseif($restaurant->south_east && $preference->south_east)
                $neighborhoods++;
        elseif($restaurant->north_west && $preference->north_west)
                $neighborhoods++;
        elseif($restaurant->north_east && $preference->north_east)
                $neighborhoods++;
                if ($restaurant->dine_in && $preference->dine_in)
                $restaurant_types++;
        elseif ($restaurant->drive_thru && $preference->drive_thru)
                $restaurant_types++;
        elseif ($restaurant->delivery && $preference->delivery)
                $restaurant_types++;
        elseif ($restaurant->take_out && $preference->take_out)
                $restaurant_types++;
        }

        $preference->d_food_type = $food_types;
        $preference->d_price_range = $price_ranges;
        $preference->d_restaurant_types = $restaurant_types;
        $preference->d_neighborhoods = $neighborhoods;
        
        $preference->save();
    }

    /**
     * Handle the Preference "updated" event.
     */
    public function updated(Preference $preference): void
    {
        //
    }

    /**
     * Handle the Preference "deleted" event.
     */
    public function deleted(Preference $preference): void
    {
        //
    }

    /**
     * Handle the Preference "restored" event.
     */
    public function restored(Preference $preference): void
    {
        //
    }

    /**
     * Handle the Preference "force deleted" event.
     */
    public function forceDeleted(Preference $preference): void
    {
        //
    }
}
