<?php

namespace App\Helpers;

class Cart
{
    private $items = [];
    private $total_quantity = 0;
    private  $total_price = 0;

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
    }
    public function list()
    {
        return $this->items;
    }
    public function add($product, $quantity = 1)
    {
        $item = [
            'product_id' => $product->id,
            'name' => $product->name,
            'price' => $product->sale_price > 0 ? $product->sale_price : $product->price,
            'image' => $product->image,
            'quantity' => $quantity
        ];

        $this->items[$product->id]=$item;

        session(['cart' =>  $this->items]);
    }

    public function totalPriceAll(){
        $total = 0;
        foreach($this->items as $item){
            $total +=$item['price'] * $item['quantity'];
            
        }
        return $total;
    }

    public function totalQuantity(){
        $total =0;
        foreach($this->items as $item){
            $total += $item['quantity'];           
        }
        return $total;
    }



}
