<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


class PreferencesController extends Controller{
    public function index() {
        return view('preferences');
    }
}