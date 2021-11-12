<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\Source;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
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

}
