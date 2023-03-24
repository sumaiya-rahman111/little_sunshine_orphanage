<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'event_date',
        'heading',
        'from_time',
        'to_time',
        'location',
        'short_description',
        'full_description'
    ];
}
