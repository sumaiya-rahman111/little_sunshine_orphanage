<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'nid',
        'company',
        'tlNumber',
        'bank',
        'branch',
        'area',
        'account',
        'phone',
        'address'
    ];
}
