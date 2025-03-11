<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    // 
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'promotion',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
