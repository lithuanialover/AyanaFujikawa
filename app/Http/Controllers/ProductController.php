<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//追記
use App\Models\Product;//追記
use Illuminate\Pagination\Paginator;//products_table Paginateメソッド

class ProductController extends Controller
{
    public function products(){
        // ログインユーザー名表示
        $user = Auth::user();
        $param = ['user' =>$user];

        //products_tableをshoppingall.blade.phpに表示
        $products = Product::all();

        // products_tableのpaginateメソッド
        $products = Product::Paginate(9);

        return view('shoppingall', ['products' => $products], $param);
    }

    public function details($id){
        // ログインユーザー名表示
        $user = Auth::user();
        $param = ['user' =>$user];

        //特定idをproducts_tableから取り出し、shoppingdetails.blade.phpに表示
        $products = Product::find($id);

        // return view('shoppingdetails', ['products' => $products], $param);
        
        //idごとに見せる用 
        return view('shoppingdetails', compact('products'), $param);
    }
}
