@extends('layouts.farmer-format')

@section('main')

<div class="cnt-top">
  <table>
    <tr>
      <th>商品画像</th>
      <th>商品名</th>
      <th>量</th>
      <th>税込価格</th>
      <th>詳細</th>
      <th>編集</th>
      <th>削除</th>
    </tr>
    @foreach ($products as $product)
      <tr>
        <td>{{$product->img}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->volume}}g</td>
        <td>{{$product->price}}円</td>
        <td>
          <div class="all-btn">
            <a href="/farmer/product/show/{{$product->id}}">詳細</a>
          </div>
        </td>
        <td>
          <div class="all-btn">
            <a href="/farmer/product/show/{{$product->id}}">編集</a>
          </div>
        </td>
        <td>
          <div class="all-btn">
            <a href="/farmer/product/show/{{$product->id}}">削除</a>
          </div>
        </td>
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