{{-- imgが表示されない --}}
@extends('layouts.format-2')

@section('main')
<div class="cnt-cmn details">
  <div class="cnt-btm">
    {{-- @foreach ($products as $product) --}}
        <div class="cnt-details flex-item">
            <div class="details-img">
                {{$products->img}}
            </div>
            <div class="details-cnt">
                <h2>{{$products->product}}</h2>
                <p>{{$products->farmer}}</p>
                <ul>
                    <li><p>{{$products->volume}}g</p></li>
                    <li><p>税込{{$products->price}}円</p></li>
                </ul>
                <div class="details-btn">
                    <a href="#">ボタン</a>
                </div>
            </div>
        </div>
        <div class="details-comments">
            <h3>農家からのメッセージ</h3>
            <p>{{$products->comments}}</p>
        </div>
        <div class="back-btn">
          <a href="/shopping/all">一覧ページに戻る</a>
        </div>
    {{-- @endforeach --}}
  </div>
@endsection