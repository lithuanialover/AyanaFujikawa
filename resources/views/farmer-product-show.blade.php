{{-- imgが表示されない --}}
@extends('layouts.farmer-format')

@section('main')
<div class="cnt-cmn details">
  <div class="cnt-btm">
        <div class="cnt-details flex-item">
            <div class="details-img">
                {{$products->img}}
            </div>
            <div class="details-cnt">
                <h2>{{$products->name}}</h2>
                <p>{{$products->farmer}}</p>
                <ul>
                    <li><p>{{$products->volume}}g</p></li>
                    <li><p>税込{{$products->price}}円</p></li>
                </ul>
            </div>
        </div>
        <div class="details-comments">
            <h3>農家からのメッセージ</h3>
            <p>{{$products->comments}}</p>
        </div>
        <div class="back-btn">
            {{-- <a href="/farmer/product/edit/{id}">編集ページへ</a> --}}
            <a href="{{ route('product.edit', ['id'=>$products->id]) }}">編集ページへ</a>
          </div>
        <div class="back-btn">
          <a href="/farmer/product/lists">一覧ページに戻る</a>
        </div>
  </div>
@endsection