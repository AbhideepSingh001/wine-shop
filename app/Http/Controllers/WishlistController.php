<?php

namespace App\Http\Controllers;

use App\Models\WishlistOrder;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function add($id)
    {
        if (!auth()->check()) {
            return redirect()->route('login')
                ->with('error', 'Please login first');
        }

        WishlistOrder::create([
            'user_id' => auth()->id(),
            'wine_id' => $id,
            'quantity' => 1,
            'status' => 'pending'
        ]);

        return back()->with('success', 'Added to wishlist');
    }

    public function index()
    {
        $wishlist = WishlistOrder::where('user_id', auth()->id())
            ->with('wine')
            ->latest()
            ->get();

        return view('pages.wishlist', compact('wishlist'));
    }
    public function remove($id)
    {
        WishlistOrder::where('id', $id)
            ->where('user_id', auth()->id())
            ->delete();

        return back()->with('success', 'Item removed from wishlist');
    }
}
