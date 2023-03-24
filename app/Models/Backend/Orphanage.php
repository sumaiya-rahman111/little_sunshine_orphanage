<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orphanage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_desc',
        'desc',
        'location',
        'email',
        'photo'
    ];
}
