<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use Illuminate\Http\Request;
use App\Models\Products;

class CartController extends Controller
{
    public function index(Cart $cart)
    {
        //    dd($cart->list());
        return view('fe.cart', compact(''));
    }

    public function addCart(Request $request, Cart $cart)
    {
        $product = Products::find($request->id);
        $quantity = $request->quantity;
        $cart->add($product, $quantity);
        return redirect()->route('cart.index');
    }
}
