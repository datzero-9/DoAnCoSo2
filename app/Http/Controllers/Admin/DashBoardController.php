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

        return view('admin.index', compact('order'));
    }
    public function cartDetail(Request $req)
    {
        // dd($req->id);
        // $OrderDetail = OrderDetail::where('order_id',$req->id)->get();
        // $order = Order::find($req->id);
        // return view('admin.cartDetail.index', compact('OrderDetail','order'));

        $orders = Order::has('orderDetails')->with('orderDetails.product')->get();

        foreach ($orders as $order) {
            echo "Đơn hàng #" . $order->id . ":\n";

            foreach ($order->orderDetails as $orderItem) {
                echo "Sản phẩm: " . $orderItem->product->name . "\n";
                echo "Số lượng: " . $orderItem->quantity . "\n";
                echo "Giá: " . $orderItem->price . "\n";
                echo "----------------------\n";         
            }
            echo "\n";
        }
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
