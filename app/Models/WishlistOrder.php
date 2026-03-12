<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishlistOrder extends Model
{
    protected $fillable = [
        'user_id',
        'wine_id',
        'quantity',
        'table_number',
        'note',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wine()
    {
        return $this->belongsTo(\App\Models\Wine::class);
    }
}
