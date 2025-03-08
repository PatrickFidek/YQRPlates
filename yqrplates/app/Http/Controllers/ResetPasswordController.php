<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller 
{
    public function signin(Request $request) {
        $fields = $request->validate([
            'email' => 'required',
            'birthday' => 'required',
            'password' => 'required',
            'confirm' => 'required'
        ]);

    }
}