<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptionRequest extends Model
{
    use HasFactory;

    protected $fillable=[
        'adptr_name',
        'adptr_email',
        'adptr_phone',
        'adptr_ban',
        'adptr_nid',
        'adptr_dob',
        'adptr_pr_add',
        'adptr_per_add',
        'adptr_roa',
        // orphans information starts
        'orph_name',
        'orph_dob',
        'orph_fn',
        'orph_mn',
        'orph_on',
        'orph_doa',
        'orph_oid'
    ]
}
