<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsFeedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'newsId',
        'fid',
        'name',
        'email',
        'comment'
    ];
}
