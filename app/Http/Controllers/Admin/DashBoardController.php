<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    // public function logon()
    // {
    //     return view('admin.logon');
    // }
    // public function accountUser(){
    //     return 'okok';
    // }
}
