<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WineGuide extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'type'
    ];
}
