@extends('layouts.farmer-format')

@section('main')

<div class="cnt-top">
  <table>
    <tr>
      <th>商品画像</th>
      <th>商品名</th>
      <th>農家名</th>
      <th>量</th>
      <th>税込価格</th>
      <th>コメント</th>
      <th>更新</th>
      <th>削除</th>
    </tr>
    @foreach ($products as $product)
      <tr>
        <td>{{$product->img}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->farmer}}</td>
        <td>{{$product->volume}}g</td>
        <td>{{$product->price}}円</td>
        <td>{{$product->comments}}円</td>
        <td><button>更新ボタン</button></td>
        <td><button>削除ボタン</button></td>
      </tr>
    @endforeach
  </table>
  <br>
  {{ $products->links() }}
  <div class="all-btn">
      <a href="/farmer/product/register">商品登録ページへ</a>
  </div>
  <div class="all-btn">
    <a href="/farmer/dashboard">ホーム画面へ</a>
  </div>
</div>

@endsection