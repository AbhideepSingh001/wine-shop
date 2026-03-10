<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'brand',
        'country',
        'year',
        'alcohol_percentage',
        'price',
        'rating',
        'description',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function collections()
    {
        return $this->belongsToMany(Collection::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}