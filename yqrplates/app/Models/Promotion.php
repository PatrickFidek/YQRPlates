<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model {
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    /**
     * Mass assignable attributes.
     *
     * @var list<string>
     */
    protected $fillable = [
        'restaurant_id',
        'promotion'
    ];

    /**
     * Relationship with Restaurant model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }
}