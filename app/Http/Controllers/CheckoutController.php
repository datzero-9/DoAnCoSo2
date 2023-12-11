<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    public function form()
    {
        return view('fe.checkout');
    }

    public function submit_Form(Request $req, Cart $cart)
    {
        $id_user =  Auth::user()->id;
        //   dd($cart->totalprice);
        $order = Order::create([
            'customer_id' => $id_user,
            'total_amount' => $cart->totalprice,
            'phone' => $req->phone,
            'address' => $req->address,
            'note' => $req->note
        ]);

        if ($order) {
            $order_id = $order->id;
            foreach ($cart->items as $key => $value) {
                // dd($cart);
                $quantity = $value['quantity'];
                OrderDetail::create([
                    'order_id' => $order_id,
                    'product_id' => $key,
                    'quantity' => $quantity,
                    'price' => $value['price']
                ]);
            }
            session(['cart' =>  null]);
            return  redirect()->route('checkout')->with('msg', 'Đặt hàng thành công, kiểm tra email để biết thông tin');
        } else {
            return  redirect()->back()->with('msg', 'Đặt hàng khỏng thành công');
        }
    }
}
