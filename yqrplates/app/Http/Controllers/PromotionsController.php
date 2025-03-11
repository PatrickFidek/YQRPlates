<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PromotionsController extends Controller 
{
    public function addPromotion(Request $request) {
        $fields = $request->validate([
            'promotion-entry' => ['required', 'min:5', 'max:255']
        ]);

        $promotion = new Promotion;
        $promotion->promotion = $fields['promotion-entry'];
        $promotion->save();

        return redirect()->back()->with('success', 'Promotion added successfully.');
    }
}