<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use App\Models\Person;

class Source extends Model
{
    use HasFactory;

    protected $casts = [
        'identifer' => 'array',
    ];

    /**
     * Get the creators for the source.
     */
    public function creators()
    {
        return $this->belongsToMany(Source::class, 'person_source', 'personID', 'sourceID');
    }

    /**
     * Get the events for the source.
     */
    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_source', 'eventID', 'sourceID');
    }

}
