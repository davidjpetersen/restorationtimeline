<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CarouselItem;

class Carousel extends Model
{
    use HasFactory;


    protected $appends = ['items'];

    public function getItemsAttribute() {
        return $this->items()->get();
    }

    /**
     * Get all of the items for the carousel.
     */
    public function items()
    {
        return $this->hasMany(CarouselItem::class);
    }


}
