<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = [
        'staff_name',
        'post',
        'email',
        'birthDate',
        'birth_Mark',
        'perm_address',
        'address',
        'contact',
        'alt_contact',
        'service_status',
        'joining_date',
        'NID',
        'passport',
        'resume',
        'photo',
        'gender',
    ];
}
