<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\WishlistOrder;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::with('wine')
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('pages.orders', compact('orders'));
    }


    public function place(Request $request, $id)
    {

        $wishlist = WishlistOrder::findOrFail($id);

        Order::create([

            'user_id' => auth()->id(),
            'wine_id' => $wishlist->wine_id,
            'quantity' => $wishlist->quantity,
            'price' => $wishlist->wine->price,
            'name' => $request->name,
            'phone' => $request->phone,
            'table_number' => $request->table_number,
            'address' => $request->address,
            'status' => 'pending'

        ]);

        return back()->with('success', 'Order placed successfully');
    }
}
