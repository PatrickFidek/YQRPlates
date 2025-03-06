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
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/|confirmed',
            'password_confirmation' => 'required',
            'type' => 'required'
        ],
        
        ['password.regex' => 'Your password must include an uppercase, lower case, number and a symbol']);
        
        return view('preferences');
    }
}



