<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function getLogin(){
        return view('client.listProduct.login');
    }

//    public function postLogin(Request $request){
//        $phone = $request->get('phone');
//        $password = $request->get('password');
//
//        $account = DB::table('user_members')
//            ->select('user_members.*')
//            ->where('user_members.phone','=',$phone)
//            ->where('user_members.password','=',$password)
//            ->get();
//            return redirect('/')->with('account',$account);
//    }

}
