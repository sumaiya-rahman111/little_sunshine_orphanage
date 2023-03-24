<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orphan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fathers_name',
        'mothers_name',
        'birthdate',
        'birth_place',
        'birth_certificate',
        'birth_mark',
        'skin_color',
        'eye_color',
        'disabilities',
        'found_place',
        'religion',
        'picture',
        'gender'
    ];
}
