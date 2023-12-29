<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function history(Request $request){

    //    dd($request->id);
        $orders = Order::has('orderDetails')->with('orderDetails.product')->where('customer_id', $request->id)->get();
        // dd($orders);
        return view('fe.history', compact('orders'));
    }
}
