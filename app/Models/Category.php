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
    protected $fillable = ['name','status','parent_id'];
    // protected $primaryKey = 'id';


    public function getAll()
    {
        return Category::paginate(6);
    }

    // public function child(){
    //     return $this -> hasMany(Category::class , 'parent_id', 'id' );
    // }
    public function addCategory(Request $request)
    {
     
        // $dataInsert = [
        //     'name' => $request->name,
        //     'status' =>  $request->status,
        //     'parent_id' =>  $request->parent_id
        // ];
        // return Category::create($dataInsert);
        
    }
    public function getDetail($id)
    {

    }


    public function updateCategory(Request $request)
    {
        
      
    }


    public function deleteUser($id)
    {

       
    }
}
