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
        $food_types = 0;
        $restaurant_types = 0;
        $neighborhoods = 0;
        $price_ranges = 0;
        foreach ($preferences as $preference) {
            $dashboard = Dashboard::where('user_id', $preference->user_id)->first();
            if($dashboard){
            if($restaurant->food_type == $preference->food_type){
                $food_types++;
                $dashboard->update(['d_food_type' => $dashboard->d_food_type + 1]);
            }
            if($restaurant->price_range == $preference->price_range){
                $price_ranges++;
                $dashboard->update(['d_price_range' => $dashboard->d_price_range + 1]);
            }
            if($restaurant->south_west && $preference->south_west){
                $neighborhoods++;
                $dashboard->update(['d_neighborhoods' => $dashboard->d_neighborhoods + 1]);
            }
            elseif($restaurant->south_east && $preference->south_east){
                $neighborhoods++;
                $dashboard->update(['d_neighborhoods' => $dashboard->d_neighborhoods + 1]);
            }
            elseif($restaurant->north_west && $preference->north_west){
                $neighborhoods++;
                $dashboard->update(['d_neighborhoods' => $dashboard->d_neighborhoods + 1]);
            }
            elseif($restaurant->north_east && $preference->north_east){
                $neighborhoods++;
                $dashboard->update(['d_neighborhoods' => $dashboard->d_neighborhoods + 1]);
            }
            if ($restaurant->dine_in && $preference->dine_in){
                $restaurant_types++;
               $dashboard->update(['d_restaurant_types' => $dashboard->d_restaurant_types + 1]);
            }
            elseif ($restaurant->drive_thru && $preference->drive_thru){
                $restaurant_types++;
                $dashboard->update(['d_restaurant_types' => $dashboard->d_restaurant_types + 1]);
            }
            elseif ($restaurant->delivery && $preference->delivery){
                $restaurant_types++;
                $dashboard->update(['d_restaurant_types' => $dashboard->d_restaurant_types + 1]);
            }
            elseif ($restaurant->take_out && $preference->take_out){
                $restaurant_types++;
                $dashboard->update(['d_restaurant_types' => $dashboard->d_restaurant_types + 1]);
            }
            $dashboard->save();
        }
    }
    Dashboard::firstOrCreate(
        ['user_id' => $restaurant->user_id],
        [
        'user_id' => $restaurant->user_id,
        'd_food_type' => $food_types,
        'd_neighborhoods' => $neighborhoods,
        'd_restaurant_types' => $restaurant_types,
        'd_price_range' => $price_ranges
]);
}

    /**
     * Handle the Restaurant "updated" event.
     */
    public function updated(Restaurant $restaurant): void
    {
        $preferences = Preference::all();
        $oldRestaurant = $restaurant->getOriginal();
        $food_types = 0;
        $restaurant_types = 0;
        $neighborhoods = 0;
        $price_ranges = 0;
        foreach($preferences as $preference){
            $dashboard = Dashboard::where('user_id', $restaurant->user_id)->first();
            $current = false;
            $increase = false;
            $decrease = false;
            if(($oldRestaurant['food_type'] == $restaurant->food_type) && ($preference->food_type == $restaurant->food_type)) {
                    $current = true;
            }
            elseif(($oldRestaurant['food_type'] == $restaurant->food_type) && ($preference->food_type != $restaurant->food_type)) {
                    $decrease = true;
            }
            elseif(($oldRestaurant['food_type'] != $restaurant->food_type) && ($preference->food_type == $restaurant->food_type)) {
                    $increase = true;
            }
            if($current) {
                    $food_types++;
            }
            elseif($increase) {
                    $dashboard->increment('d_food_type');
                    $food_types++;
            }
            elseif($decrease){
                    $dashboard->decrement('d_food_type');
            }
        }
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
