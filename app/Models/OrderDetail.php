<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Order;
use App\Models\Products;


class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'product_id', 'quantity', 'price'];


    public function ord()
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }
    public function pro()
    {
        return $this->belongsTo(Products::class);
    }
}
