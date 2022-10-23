<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Pagination\Paginator;//products_table Paginateメソッド
use App\Http\Requests\ProductRequest;

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

    public function productAdd()
    {
        return view('farmer-product-register');
    }
    public function productCreate(ProductRequest $request)
    {
        $form = $request->all();
        Product::create($form);

        /**画像保存 */
        // ディレクトリ名
        $dir = 'products';
        // アップロードされたファイル名を取得
        $file_name = $request->file('img')->getClientOriginalName();
        // 取得したファイル名で保存
        $request->file('img')->storeAs('public/img/' . $dir, $file_name);
        
        // ファイル情報をDBに保存
        $image = new Image();
        $image->name = $file_name;
        $image->path = 'storage/' . $dir . '/' . $file_name;
        $image->save();

        return redirect('/farmer/product/lists');
    }

    public function productShow($id)
    {
        $products = Product::find($id);

        return view('farmer-product-show', ['products' => $products]);
    }

    public function productEdit($id)//更新
    {
        $products = Product::find($id);

        return view('farmer-product-edit', ['products' => $products]);
    }

    public function productUpdate(Request $request, $id)//更新
    {
        $products = Product::find($id);
        $updateProduct = $this->products->updateProduct($request, $products);

        return redirect()->route('product.show');
    }

}
