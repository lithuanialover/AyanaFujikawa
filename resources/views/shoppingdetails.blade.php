{{-- imgが表示されない --}}
@extends('layouts.format-2')

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
                    <li>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $products->id }}" name="id">
                            <input type="hidden" value="{{ $products->name }}" name="name">
                            <input type="hidden" value="{{ $products->img }}" name="img">
                            <input type="hidden" value="{{ $products->price }}"  name="price">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Add To Cart</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="details-comments">
            <h3>農家からのメッセージ</h3>
            <p>{{$products->comments}}</p>
        </div>
        <div class="back-btn">
          <a href="/shopping/all">一覧ページに戻る</a>
        </div>
  </div>
@endsection

