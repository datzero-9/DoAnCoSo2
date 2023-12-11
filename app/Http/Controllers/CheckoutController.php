<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function form(){
       return view('fe.checkout'); 
    }  

    public function submit_Form(){
        
    }
}
