<?php

namespace App\Http\Controllers;

use App\Models\WishlistOrder;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function add($id)
    {
        if(!auth()->check()){
            return redirect()->route('login')
                ->with('error','Please login first');
        }

        WishlistOrder::create([
            'user_id' => auth()->id(),
            'wine_id' => $id,
            'quantity' => 1,
            'status' => 'pending'
        ]);

        return back()->with('success','Added to wishlist');
    }
}