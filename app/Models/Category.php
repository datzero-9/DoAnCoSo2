<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;

class Category extends Model
{
    use HasFactory;
    // protected $table = 'categories';
    protected $fillable = ['name', 'status', 'parent_id'];
    // protected $primaryKey = 'id';


    public function getAll()
    {
        return Category::paginate(6);
    }
    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }
}
