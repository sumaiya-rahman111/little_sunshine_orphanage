<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'identype',
        'identity',
        'phone',
        'address',
        'op1',
        'op2',
        'op3',
        'op4',
        'op5',
        'image'
    ];
}
