<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\ImgProducts;
use App\Models\OrderDetail;

class Products extends Model
{
    use HasFactory;
 protected $fillable = ['name','image','price','sale_price','category_id','slug','description','stock'];
 /**
  * Get the user that owns the Products
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
  //quan hệ 1 nhiều nhưng ngược nên sử dụng belongTo để đổi lại vị trí
  
 public function category()
 {
     return $this->belongsTo(Category::class);
 }
 //localScope
 public function scopeSearch($query){
    if($key = request()->key){
        $query = $query->where('name','like','%'.$key.'%');      
       }
       return $query;
 }
 public function images()
{
    return $this->hasMany(ImgProducts::class,'product_id','id');
}


public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
