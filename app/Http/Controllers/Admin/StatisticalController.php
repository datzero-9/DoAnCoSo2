<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatisticalController extends Controller
{
    public function index()
    {
        $orders = Order::has('orderDetails')->with('orderDetails.product')->get();
        // dd($orders);
        return view('admin.statistical.all',compact('orders'));
    }
}
