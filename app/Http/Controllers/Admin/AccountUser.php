<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AccountUser extends Controller
{
public function index(){  
    $user = User::all();
    // dd($user);
    return view('admin.account.accountUser', compact('user'));
}
public function destroy($id){

       
    try {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect()->route('accountuser.index')->with('msg', 'xóa thành công ');
    } catch (\Throwable $th) {
        return redirect()->back()->with('msg', 'xóa không thành công ');
    }
}
}
