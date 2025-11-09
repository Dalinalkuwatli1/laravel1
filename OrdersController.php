<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('dashboard.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('order_details.product')->findOrFail($id);
        return view('dashboard.orders.show', compact('order'));
    }
}

