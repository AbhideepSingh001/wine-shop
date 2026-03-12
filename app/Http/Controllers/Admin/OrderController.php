<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('wine', 'user')->latest()->get();

        return view('admin.orders.index', compact('orders'));
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return back()->with('success', 'Order cancelled successfully');
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->status = $request->status;
        $order->save();

        return back()->with('success', 'Order status updated successfully');
    }
}
