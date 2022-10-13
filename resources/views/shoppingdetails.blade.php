{{-- imgが表示されない --}}
@extends('layouts.format-2')

@section('main')
<div class="cnt-cmn">
    @foreach ($products as $product)
        <div class="details flex-item">
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
            <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa <br>
            aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa <br>
            aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa <br>
            aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa <br>
            aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa <br>
            </p>
        </div>
    @endforeach
</div>
{{-- <div class="cnt-cmn">
  <div class="cnt3 cnt-btm">
    <div class="cnt-cards flex-item">
      @foreach ($products as $product)
        <div class="card">
          <div class="card__img">
            {{$product->img}}
          </div>
          <div class="card__content">
              <div class="card__content-cat">{{$product->farmer}}</div>
              <h2 class="card__content-ttl">{{$product->product}}</h2>
              <div class="card__content-tag">
                  <p class="card__content-tag-item">{{$product->volume}}g</p>
                  <p class="card__content-tag-item card__content-tag-item--last">{{$product->price}}円</p>
              </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div> --}}
@endsection