<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Setting;
class CartController extends Controller
{

    public function detailsshowcart($id)
    {
        $order = Order::with('order_details.product')->findOrFail($id);
        return view('site.pages.cartdetails', compact('order'));
    }


    public function addToCart(Request $request)
    {
        try {
            $userId = 1;

            $productId = $request->input('product_id');
            $price = (float) $request->input('price');
            $quantity = 1;

            if (!$productId || !$price) {
                return response()->json(['success' => false, 'message' => 'Incomplete data']);
            }

            $product = Product::find($productId);
            if (!$product) {
                return response()->json(['success' => false, 'message' => 'المنتج غير موجود']);
            }

            $order = Order::firstOrCreate(
                ['user_id' => $userId, 'status' => 'pending'],
                ['total_price' => 0, 'payment_status' => 'unpaid']
            );

            $orderDetail = OrderDetail::where('order_id', $order->id)
                ->where('product_id', $productId)
                ->first();

            if ($orderDetail) {
                $orderDetail->increment('quantity');
                $orderDetail->price += $price;
                $orderDetail->save();
            } else {
                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'quantity' => $quantity,
                    'price' => $price,
                ]);
            }

            $order->total_price = OrderDetail::where('order_id', $order->id)->sum('price');
            $order->save();

            return response()->json(['success' => true, 'message' => 'The product has been added to the cart']);
        } catch (\Exception $e) {
            \Log::error('Add to cart error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Something went wrong']);
        }
    }

    // حذف منتج من السلة
    public function removeFromCart($id)
    {
        $item = OrderDetail::findOrFail($id);
        $order = $item->order;

        $item->delete();

        // إعادة حساب المجموع
        $order->total_price = $order->order_details()->sum('price');
        $order->save();

        return back()->with('success', 'The product has been removed from the cart.');
    }

    // تحديث كمية منتج في السلة
    public function updateQuantity(Request $request, $id)
    {
        $item = OrderDetail::findOrFail($id);
        $quantity = (int) $request->input('quantity');

        if ($quantity < 1) {
            return back()->with('error', 'Quantity must be at least 1');
        }

        $pricePerItem = $item->price / $item->quantity;
        $item->quantity = $quantity;
        $item->price = $pricePerItem * $quantity;
        $item->save();

        // تحديث المجموع الكلي
        $item->order->total_price = $item->order->order_details()->sum('price');
        $item->order->save();

        return back()->with('success','Quantity updated');
    }

    // إفراغ السلة
    public function clearCart($orderId)
    {
        $order = Order::with('order_details')->findOrFail($orderId);

        foreach ($order->order_details as $item) {
            $item->delete();
        }

        $order->total_price = 0;
        $order->save();

        return back()->with('success', 'The basket was emptied successfully');
    }

public function index()
{
    \Log::info('Cart index called');

    $userId = 1;

    $order = Order::with('order_details.product')
        ->where('user_id', $userId)
        ->where('status', 'pending')
        ->first();

    $Settings = Setting::first(); // جلب أول سجل من جدول الإعدادات

    return view('site.pages.cartshow', compact('order', 'Settings'));
}
}
