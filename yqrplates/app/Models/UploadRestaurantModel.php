<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UploadRestaurantModel extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'menu_link'
    ];
}
