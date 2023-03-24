<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSelection extends Model
{
    use HasFactory;

    protected $fillable = [
        'aids',
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
