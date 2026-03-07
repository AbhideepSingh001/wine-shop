<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishlistOrder extends Model
{
    protected $fillable = [
        'wine_id',
        'quantity',
        'table_number',
        'note',
        'status'
    ];

    public function wine()
    {
        return $this->belongsTo(Wine::class);
    }
}