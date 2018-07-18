<?php

namespace App\Http\Controllers\Client;

use App\Category;
use App\Product;
use App\UserMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index(){
        $product = Category::all();
        return view('client.layoutHomepage.homepage')->with('product',$product) ;
    }

    public function listItem(){
        $product = Product::paginate(8);
        $category = Category::all();
        return view('client.listProduct.listItemHomepage')
            ->with('product',$product)
            ->with('category',$category)  ;
    }
}
