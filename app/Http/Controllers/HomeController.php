<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;


class HomeController extends Controller
{
    public function index()
    {

        $hotproducts = Products::orderBy('id','desc')->where('stock', 1)->paginate(4);
        $allProduct = Products::orderBy('id','desc')->get();
        $newProduct = Products::orderBy('id','desc')->orderBy('id','desc')->take(2)->get();
        // dd($allProduct);
        return view('fe.home', compact('hotproducts', 'allProduct','newProduct'));
    }

    public function detail($slug)
    {
        $product = Products::where('slug', $slug)->first();

        // dd($product);
        return view('fe.detail', compact('product'));
    }
}
