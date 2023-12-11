<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;


class ImgProducts extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id';
    // protected $table = 'img_products';
    protected $fillable = ['image','product_id'];
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
