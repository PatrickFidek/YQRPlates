<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;

use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function index(){
        return view('suggestion');
    }
    public function getSuggestion() {
        $restaurants = Restaurant::all();
        return view('suggestion', compact('restaurants'));
}
}