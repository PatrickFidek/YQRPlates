<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller 
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'birthday' => 'required|date|before_or_equal:today',
            'password' => 'required|min:8',
            'type' => 'required'
        ]);
        
        return view('preferences');
    }
}

