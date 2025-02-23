<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Support\Str;

class DashboardController extends Controller
{

    public function index()
    {
        return view('dashboard.index');
    }

}