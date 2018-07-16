<?php

namespace App\Http\Controllers\Client;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index(){
        $category = Category::all();

        return view('client.layoutHomepage.master')->with('category',$category);

    }
    public function index2(){
        $category = Category::all();
        $product = Product::paginate(6);

        return view('client.listClient.dashboard')->with('category',$category)->with('product',$product);

    }
    public function index3(){
        $category = Category::all();

        return view('client.listClient.introduce')->with('category',$category);

    }
    public function index4(){
        $category = Category::all();

        return view('client.listClient.contact')->with('category',$category);

    }


}
