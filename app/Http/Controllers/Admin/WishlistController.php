<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WishlistOrder;


class WishlistController extends Controller
{
    public function index()
    {
        $wishlists = \App\Models\WishlistOrder::with(['user', 'wine'])->get();

        return view('admin.wishlist.index', compact('wishlists'));
    }
}
