<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
