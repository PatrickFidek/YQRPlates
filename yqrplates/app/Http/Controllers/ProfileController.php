<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProfileController extends Controller 
{
    public function seeProfile() {
        return view('profile');
    }
}