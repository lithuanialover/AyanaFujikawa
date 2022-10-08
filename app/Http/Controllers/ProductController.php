<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//追記
// use App\Models\Product;

class ProductController extends Controller
{
    public function products(){
        $user = Auth::user();
        $param = ['user' =>$user];

        // $product = Product::product();
        // $param = ['product' =>$product];

        return view("shoppingall", $param);
    }
}
