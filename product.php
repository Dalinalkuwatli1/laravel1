<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'short_desc',
        'related_product',
        'price',
        'compare_price',
        'category_id',
        'subcategory_id',
        'brand_id',
        'is_featured',
        'showonhome',
        'qty',
        'track_qty',
        'status','size'
    ];
  public function category(){
    return $this->belongsTo(categarey::class);
  }

  public function order_details()
{
    return $this->hasMany(OrderDetail::class);
}

public function orders()
{
    return $this->belongsToMany(order::class, 'order_details')
                ->withPivot('quantity', 'price')
                ->withTimestamps();
}

}

