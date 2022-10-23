<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//追記
use App\Models\Product;//追記
use Illuminate\Pagination\Paginator;//products_table Paginateメソッド
use App\Http\Requests\ProductRequest;//追記

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
    public function productLists()
    {
        $products = Product::all();
        // products_tableのpaginateメソッド
        $products = Product::Paginate(9);

        return view('farmer-product-lists', ['products' => $products]);
    }

    public function farmerRegister(){

            //products_tableをshoppingall.blade.phpに表示
            $products = Product::all();

        return view("farmer-product-register", ['products' => $products]);
    }

    public function productAdd()
    {
        return view('farmer-product-register');
    }
    public function productCreate(ProductRequest $request)
    {
        $form = $request->all();
        Product::create($form);
        return redirect('/farmer/product/lists');
    }

    public function productShow($id)
    {
        $products = Product::find($id);

        return view('farmer-product-show', ['products' => $products]);
    }

    public function productEdit($id)
    {
        $products = Product::find($id);

        return view('farmer-product-edit', ['products' => $products]);
    }

    public function productUpdate(Request $request, $id)
    {
        $products = Product::find($id);
        // $updateProduct = $this->products->updateProduct($request, $products);

        return redirect()->route('product.show');
    }

}
