<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\Source;
use App\Models\Carousel;

class Event extends Model
{
    use HasFactory;

  
    public static $label = 'Events';
    public static $singularLabel = 'Event';
    protected $casts = [
        'identifer' => 'array',
        'sameAs' => 'array',
        'startDate' => 'date',
        'endDate' => 'date'
    ];

    /**
     * Get list of people associated with this event.
     */
    public function people()
    {
        return $this->belongsToMany(Person::class, 'event_person', 'eventID', 'personID');
    }

    /**
     * Get all sources that mention this event.
     */
    public function sources()
    {
        return $this->belongsToMany(Source::class, 'event_source', 'eventID', 'sourceID')->withPivot(['pageNumber']);
    }

    /**
     * Get all of the carousels for the event.
     */
    public function carousels()
    {
        return $this->morphMany(Carousel::class, 'carouselable')->singularLabel('Carousel');
    }


    
}
