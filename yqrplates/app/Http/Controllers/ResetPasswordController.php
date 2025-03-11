<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class ResetPasswordController extends Controller 
{
    public function resetPassword(Request $request) {
        $fields = $request->validate([
            'email' => 'required|email',
            'birthday' => 'required|date',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/|confirmed',
            'password_confirmation' => 'required'
        ],
        ['password.regex' => 'Must include : uppercase, lowercase, number and symbol']);

        $user = User::where('email', $fields['email'])->first();
                    

        if ($user) {
            if (
                $user->password = Hash::make($fields['password']);
                $user->save();
            )
            
        
        auth()->login($user);
        return redirect('/profile');
        }
        else {
            return back()->withErrors(['message' => 'Email and Birthday do not match our records.']);
        }
    }
}