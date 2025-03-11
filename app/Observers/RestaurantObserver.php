<?php

namespace App\Observers;

use App\Models\Restaurant;
use App\Models\Preference;

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

            $preference->d_food_type = $food_types;
            $preference->d_price_range = $price_ranges;
            $preference->d_restaurant_types = $restaurant_types;
            $preference->d_neighborhoods = $neighborhoods;

            $preference->save();
            // if ($preference->food_type == $restaurant->food_type){
            //     $preference->d_food_type = $preference->d_food_type + 1;
            // }

            // if ($preference->price_range == $restaurant->price_range)
            //     $preference->d_price_range = $preference->d_price_range + 1;

            // if ($preference->south_west && $restaurant->south_west)
            //     $preference->d_neighborhoods = $preference->d_neighborhoods + 1;
            // elseif ($preference->south_east && $restaurant->south_east)
            //     $preference->d_neighborhoods++;
            // elseif ($preference->north_west && $restaurant->north_west)
            //     $preference->d_neighborhoods++;
            // elseif ($preference->north_east && $restaurant->north_east)
            //     $preference->d_neighborhoods++;

            // if ($preference->dine_in && $restaurant->dine_in)
            //     $preference->d_restaurant_types++;
            // elseif ($preference->drive_thru && $restaurant->drive_thru)
            //     $preference->d_restaurant_types++;
            // elseif ($preference->delivery && $restaurant->delivery)
            //     $preference->d_restaurant_types++;
            // elseif ($preference->take_out && $restaurant->take_out)
            //     $preference->d_restaurant_types++;

            // $preference->save();
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
