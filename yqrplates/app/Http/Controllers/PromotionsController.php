<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Promotion;

class PromotionsController extends Controller 
{
    /*
    public function addPromotion(Request $request)
    {
        $fields = $request->validate([
            'promotion-entry' => ['required', 'min:5', 'max:255']
        ]);
    }
    */

    public function index()
    {
       $user = auth()->user();

       if(!$user)
       {
        return redirect('/signin');
       }

     //  if (!$user) { return redirect()->back()->with('error', 'No restaurant found for this user.');}
       $restaurant = $user->restaurant;
       
     //if (!$restaurant) {return redirect()->back()->with('error', 'No restaurant associated with this user.');}

     $promotions = $restaurant->promotions;

        return view('promotions', compact('promotions'));
    }
    
    public function create() {
        return view('createPromotion');
    }

    public function addPromotion(Request $request)
    {
        $fields = $request->validate([
            'promotion_entry' => ['required', 'min:5', 'max:255']
        ]);
        
        $promotiontext = '';
        if($request->input('promotion_entry') != NULL) {
            $promotiontext = $request->input('promotion_entry');
        }

        $user = auth()->user();
        $restaurant = $user->restaurant;

        Promotion::create([
            'restaurant_id' => $restaurant->id,
            'promotion' => $request->promotion_entry
        ]);

        return redirect()->back()->with('added', 'Successful action.');
    }

    public function removePromotion(Request $request)
    {
        $request->validate([
            'promotion_id' => 'required|exists:promotions,id',
        ]);
         $promotion = Promotion::find($request->promotion_id);
         $userRestaurantId = auth()->user()->restaurant->id;

         if ($promotion->restaurant_id !== $userRestaurantId) {
             return redirect()->back()->with('error', 'Unauthorized.');
         }
 
         $promotion->delete();         
        return redirect()->back()->with('success', 'Promotion removed successfully!');

    }

}  