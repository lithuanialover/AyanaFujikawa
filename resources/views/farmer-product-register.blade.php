@extends('layouts.farmer-format')

@section('main')

<h2>農家;Product Register</h2>
<div class="cnt-cmn">
    <div class="cnt3 cnt-btm">
      <div class="cnt-cards flex-item">
        @foreach ($products as $product)
        <a href="/shopping/details/{{$product->id}}">
          <div class="card">
            <div class="card__img">
              {{$product->img}}
            </div>
            <div class="card__content">
                <div class="card__content-cat">{{$product->farmer}}</div>
                <h2 class="card__content-ttl">{{$product->name}}</h2>
                <div class="card__content-tag">
                    <p class="card__content-tag-item">{{$product->volume}}g</p>
                    <p class="card__content-tag-item card__content-tag-item--last">{{$product->price}}円</p>
                </div>
            </div>
          </div>
        </a>
        @endforeach
      </div>
    </div>
    {{ $products->links() }}
    <br>
    <div class="all-btn">
        <a href="/farmer/dashboard">ホーム画面に戻る</a>
    </div>
  </div>

@endsection