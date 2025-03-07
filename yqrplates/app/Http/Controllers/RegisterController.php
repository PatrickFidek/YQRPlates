<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller 
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|min:1|max:12',
            'email' => 'required|email',
            'birthday' => 'required|date|before_or_equal:today',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/|confirmed',
            'password_confirmation' => 'required',
            'type' => 'required'
        ],
        
        ['password.regex' => 'Must include : uppercase, lowercase, number and symbol']);
        
        $fields['password'] = bcrypt($fields['password']);
        $user = User::create($fields);
        auth()->login($user);

        return redirect('/preferences');
    }
}



