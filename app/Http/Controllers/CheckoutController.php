<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



class CheckoutController extends Controller
{
    public function form()
    {
        return view('fe.checkout');
    }

    public function submit_Form(Request $req, Cart $cart)
    {
        $id_user =  Auth::user()->id;
        //   dd( $id_user);
        $orderDate =  Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $rules = [
            'phone' => 'required|numeric|min:10',
            'address' => 'required',
        ];
        $message = [
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.numeric' => 'Số điện thoại phải là số',
            'phone.min' => 'Số điện thoại tối thiểu :min số',
            'address.required' => 'Vui lòng nhập địa chỉ',
        ];

        $req->validate($rules, $message);

        $order = Order::create([
            'customer_id' => $id_user,
            'total_amount' => $cart->totalprice,
            'phone' => $req->phone,
            'address' => $req->address,
            'note' => $req->note,
            'order_date' => $orderDate
        ]);
        // dd($order);
        if ($order) {
            $order_id = $order->id;
            // dd($cart->items);
            foreach ($cart->items as $key => $value) {
                // dd($value);
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
