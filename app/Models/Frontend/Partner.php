<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
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
