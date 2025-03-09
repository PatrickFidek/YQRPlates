<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'menu_link',
        'price_range',
        'food_type',
        'south_east',
        'south_west',
        'north_east',
        'north_west',
        'dine_in',
        'take_out',
        'delivery',
        'drive_thru'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}