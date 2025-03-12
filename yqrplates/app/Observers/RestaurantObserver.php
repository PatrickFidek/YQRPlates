<?php

namespace App\Observers;

use App\Models\Restaurant;
use App\Models\Preference;
use App\Models\Dashboard;

class RestaurantObserver
{
    /**
     * Handle the Restaurant "created" event.
     */
    public function created(Restaurant $restaurant): void
    {
        $preferences = Preference::all();
        $restaurants = Restaurant::all();

        foreach ($preferences as $preference) {

            $food_types = 0;
            $restaurant_types = 0;
            $neighborhoods = 0;
            $price_ranges = 0;

            foreach ($restaurants as $restaurant) {
                if ($restaurant->food_type == $preference->food_type)
                    $food_types++;
                if ($restaurant->price_range == $preference->price_range)
                    $price_ranges++;
                if ($restaurant->south_west && $preference->south_west)
                    $neighborhoods++;
                elseif ($restaurant->south_east && $preference->south_east)
                    $neighborhoods++;
                elseif ($restaurant->north_west && $preference->north_west)
                    $neighborhoods++;
                elseif ($restaurant->north_east && $preference->north_east)
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


            $dashboard = Dashboard::where('user_id', $preference->user_id)->first();

            if($dashboard){
                $dashboard->update([
                    'd_food_type' => $food_types,
                    'd_neighborhoods' => $neighborhoods,
                    'd_restaurant_types' => $restaurant_types,
                    'd_price_range' => $price_ranges
            ]);
            }
            else{
                Dashboard::firstOrCreate(
                    ['user_id' => $preference->user_id],
                    [
                    'user_id' => $preference->user_id,
                    'd_food_type' => $food_types,
                    'd_neighborhoods' => $neighborhoods,
                    'd_restaurant_types' => $restaurant_types,
                    'd_price_range' => $price_ranges
            ]);
    
            }
    }
}

    /**
     * Handle the Restaurant "updated" event.
     */
    public function updated(Restaurant $restaurant): void
    {
        //
    }

    /**
     * Handle the Restaurant "deleted" event.
     */
    public function deleted(Restaurant $restaurant): void
    {
        //
    }

    /**
     * Handle the Restaurant "restored" event.
     */
    public function restored(Restaurant $restaurant): void
    {
        //
    }

    /**
     * Handle the Restaurant "force deleted" event.
     */
    public function forceDeleted(Restaurant $restaurant): void
    {
        //
    }
}
