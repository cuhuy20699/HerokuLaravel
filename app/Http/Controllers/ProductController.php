<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('master');
    }
    public function userAdmin(){
        return view('admin.user-admin');
    }
}
