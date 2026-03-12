<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'wine_id',
        'quantity',
        'price',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wine()
    {
        return $this->belongsTo(Wine::class);
    }
}
