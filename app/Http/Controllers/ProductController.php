<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//追記
use App\Models\Product;//追記
use Illuminate\Pagination\Paginator;//products_table Paginateメソッド

class ProductController extends Controller
{
    /**User画面 */
    public function products(){
        // ログインユーザー名表示
        $user = Auth::user();
        $param = ['user' =>$user];

        //products_tableをshoppingall.blade.phpに表示
        $products = Product::all();

        // products_tableのpaginateメソッド
        $products = Product::Paginate(9);

        // img

        return view('shoppingall', ['products' => $products], $param);
    }

    public function details($id){
        // ログインユーザー名表示
        $user = Auth::user();
        $param = ['user' =>$user];

        //特定idをproducts_tableから取り出し、shoppingdetails.blade.phpに表示<施策①>
        $products = Product::findOrFail($id);

        //Laravel shopping cart 下を表示させると「Property [img] does not exist on this collection instance.」エラーがでる。
        // $products = Product::all();
        return view('shoppingdetails', ['products' => $products], $param);
    }

    /**Farmer画面 */
    //shows "farmer-product-register.blade.php"
    public function farmerRegister(){
            //products_tableをshoppingall.blade.phpに表示
            $products = Product::all();

            // products_tableのpaginateメソッド
            $products = Product::Paginate(9);

        return view("farmer-product-register", ['products' => $products],);
    }

}
