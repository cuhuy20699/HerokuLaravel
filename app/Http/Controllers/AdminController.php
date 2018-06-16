<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.layoutAdmin.master');
    }
    public function loginAdmin(){
        return view('admin.listAdmin.login');
    }
    public function listUser(){
        return view('admin.listAdmin.User.ListUser');
    }
    public function formUser(){
        return view('admin.listAdmin.User.FormUser');
    }
}
