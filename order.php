<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'status', 'total_price', 'payment_status', 'shipping_date', 'address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_details', 'order_id', 'product_id')
            ->withPivot('quantity', 'price')
            ->withTimestamps();
    }
}
