<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carousel;

class CarouselItem extends Model
{
    use HasFactory;

    public function carousel() 
    {
        return $this->belongsTo(Carousel::class);
    }

    public function carouselable()
    {
        return $this->morphTo();
    }
}
