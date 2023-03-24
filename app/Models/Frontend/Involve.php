<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Involve extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'desc',
        'button',
        'action'
    ];
}
