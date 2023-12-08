<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {

        $hotproducts = Products::where('stock', 1)->get();
        $allProduct = Products::where('stock',0)->get();
        // dd($allProduct);
        return view('fe.home', compact('hotproducts', 'allProduct'));
    }

    public function detail($slug)
    {
        $product = Products::where('slug', $slug)->first();

        // dd($product);
        return view('fe.detail', compact('product'));
    }
}
