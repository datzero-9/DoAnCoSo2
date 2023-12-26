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
    private $orderdetail;
    public function __construct()
    {
        $this->orderdetail = new OrderDetail();
    }
    public function index()
    {
        $order = Order::orderBy('id', 'desc')->paginate(15);
        // dd($order);
        return view('admin.index', compact('order'));
    }
    public function cartDetail(Request $req)
    {

        // $order = Order::find($req->id);
        $orders = Order::has('orderDetails')->with('orderDetails.product')->where('id', $req->id)->get();
        // dd($orders);
        return view('admin.cartDetail.index', compact('orders'));
    }
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
