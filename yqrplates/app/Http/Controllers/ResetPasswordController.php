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
            'email' => 'required',
            'birthday' => 'required|date',
            'password' => 'required|min:8|confirmed',
            'confirm' => 'required'
        ]);
        
        $user = User::where('email', $fields['email'])
                    ->where('birthday', $fields['birthday'])
                    ->first();


        
    }
}