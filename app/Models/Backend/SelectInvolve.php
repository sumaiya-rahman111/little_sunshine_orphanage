<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectInvolve extends Model
{
    use HasFactory;

    protected $fillable = [
        'iid',
        'heading',
        'desc',
        'button',
        'action'
    ];
}
