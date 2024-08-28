<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_about_designs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'url',
        'img',
    ];
}
