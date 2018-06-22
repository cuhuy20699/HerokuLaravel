<?php

namespace App\Http\Controllers;

use App\UserMember;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.listAdmin.dashboard');
    }
//    public function loginAdmin(){
//        return view('admin.listAdmin.login');
//    }
//    public function listUser(){
//        $user = UserMember::all();
//        return view('admin.listAdmin.User.ListUser')->with('user',$user) ;
//    }
//    public function formUser(){
//        return view('admin.listAdmin.User.FormUser');
//    }
//}
}