<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carousel;

class Organization extends Model
{
    use HasFactory;

    protected $casts = [
        'address' => 'array',
        'foundingLocation' => 'array',
        'dissolutionLocation' => 'array',
    ];

    /**
     * Get all of the carousels for the organization.
     */
    public function carousels()
    {
        return $this->morphMany(Carousel::class, 'carouselable')->singularLabel('Carousel');
    }

}
