<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use Illuminate\Http\Request;
use App\Models\Products;

class CartController extends Controller
{
    public function index(Cart $cart)
    {
        // dd($cart->totalPriceAll());
        return view('fe.cart', compact('cart'));
    }

    public function addCart(Request $request, Cart $cart)
    {
        $product = Products::find($request->id);
        $quantity = $request->quantity;
        $cart->add($product, $quantity);
        //nên hiện thị thong báo thôi  thay vì nhảy thẳng qua
        return redirect()->back();
    }
}
