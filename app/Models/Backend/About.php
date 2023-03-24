<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'heading',
        'desc',
        'p1',
        'p2',
        'p3',
        'p4',
        'aboutPhoneNumber',
        'aboutEmailAddress',
        'aboutLocation'
    ];
}
