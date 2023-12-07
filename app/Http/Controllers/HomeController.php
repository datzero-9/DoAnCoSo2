<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
class HomeController extends Controller
{
    public function index(){

        $hotproducts = Products::where('stock',1)->get();
        // $hotproducts = Products::where('name',0)->get();
        // $hotproducts = Products::where('stock',1)->get();
        // dd($hotproducts);
        $category = Category::where('parent_id', 0)->get();
     
        return view('fe.home',compact('hotproducts', 'category'));
    }
    
}
