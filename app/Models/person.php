<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Source;
use App\Models\Carousel;

class Person extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are NOT mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
    protected $appends = ['fullName'];
    protected $casts = [
        'birthDate' => 'datetime:Y-m-d',
        'deathDate' => 'datetime:Y-m-d',
    ];

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->givenName} {$this->additionalName} {$this->familyName} {$this->honorificSuffix}";
    }

    /**
     * Get the author's publications.
     */
    public function creatorOf()
    {
        return $this->belongsToMany(Source::class, 'person_source');
    }


    /**
     * Get all of the carousels for the event.
     */
    public function carousels()
    {
        return $this->morphMany(Carousel::class, 'carouselable');
    }

}
