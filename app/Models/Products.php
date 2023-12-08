<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Products extends Model
{
    use HasFactory;
 protected $fillable = ['name','image','price','sale_price','category_id','slug','description','stock'];
 /**
  * Get the user that owns the Products
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
  //quan hệ 1 1 nhưng ngược nên sử dụng belongTo để đổi lại vị trí
  
 public function category()
 {
     return $this->belongsTo(Category::class);
 }
}
