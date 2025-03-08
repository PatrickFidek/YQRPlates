<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SigninController extends Controller 
{
    public function signin(Request $request) {
        $fields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => $fields['email'], 'password' => $fields['password']])) {
            return redirect('/profile');
        } 
        else {
            return back()->withErrors(['message' => 'Invalid Credentials']);
        }
    }

    public function logout() {
        auth()->logout();
        return redirect('/signin');
main
    }
}