<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Order;
use App\Models\OrderDetail;

class DashBoardController extends Controller
{
    public function index()
    {
        $order = OrderDetail::orderBy('id', 'desc')->get();
        // dd($order);
        return view('admin.index', compact('order'));
    }


    // public function laptop()
    // {
    //     $laptop = Products::where('category_id', 1)->get();
    //     return view('admin.product.listlaptop', compact('laptop'));
    // }
    // public function tainghe()
    // {
    //     $tainghe = Products::where('category_id', 4)->get();
    //     return view('admin.product.listheadphone', compact('tainghe'));
    // }
    // public function banphim()
    // {
    //     $banphim = Products::where('category_id', 3)->get();
    //     return view('admin.product.listkeyboard', compact('banphim'));
    // }
    // public function manhinh()
    // {
    //     $manhinh = Products::where('category_id', 2)->get();
    //     return view('admin.product.listtv', compact('manhinh'));
    // }
    // public function chuot()
    // {
    //     $chuot = Products::where('category_id', 5)->get();
    //     return view('admin.product.listmouse', compact('chuot'));
    // }
}
