<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//追記
use App\Models\Product;//追記

class ProductController extends Controller
{
    public function products(){
        // ログインユーザー名表示
        $user = Auth::user();
        $param = ['user' =>$user];

        //products_tableをshoppingall.blade.phpに表示
        $products = Product::all();

        // products_tableのpaginateメソッド
        $products = Product::simplePaginate(9);

        return view('shoppingall', ['products' => $products], $param);
    }
}
