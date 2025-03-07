<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SigninController extends Controller 
{
    public function signin(Request $request) {
        $fields = $request->validate([
            'signin_email' => 'required',
            'signin_password' => 'required'
        ]);
        return view('profile');
    }
}