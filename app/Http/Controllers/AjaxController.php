<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class AjaxController extends Controller
{
    public function ajaxSearch(){
       $search = Products::search()->get();
       return $search; 
    }
}
