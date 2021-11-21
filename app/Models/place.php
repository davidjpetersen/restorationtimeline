<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carousel;

class Place extends Model
{
    use HasFactory;
    protected $casts = [
        'identifier' => 'array',
        'sameAs' => 'array',
        'address' => 'array',
    ];

    /**
     * Get all of the carousels for the place.
     */
    public function carousels()
    {
        return $this->morphMany(Carousel::class, 'carouselable');
    }

}
