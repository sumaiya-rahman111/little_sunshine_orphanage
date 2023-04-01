<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptionRequestSubmit extends Model
{
    use HasFactory;

    protected $fillable = [
        'orphanId',
        'adopterId',
        'adopterName',
        'adopterEmail',
        'formNumber',
        'spouseName',
        'adopterAltMobile',
        'adopterGender',
        'image',
        'adopterMobile',
        'adopterBan',
        'adopterNid',
        'adopterDob',
        'adopterPa',
        'adopterPeradd',
        'adopterReason',
    ];
}
