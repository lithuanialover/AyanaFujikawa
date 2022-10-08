{{-- imgが表示されない --}}
@extends('layouts.format-2')

@section('main')
<div class="cnt-cmn">
  <div class="cnt3 cnt-btm">
    <div class="cnt-cards flex-item">
      <div class="card">
        <div class="card__img">
            <img src="img/card1.jpg" alt="card1">
        </div>
        <div class="card__content">
            <div class="card__content-cat">AAA農園</div>
            {{-- <h2 class="card__content-ttl">{{$product->product}}</h2> --}}
            <div class="card__content-tag">
                <p class="card__content-tag-item">100g</p>
                <p class="card__content-tag-item card__content-tag-item--last">500yen</p>
            </div>
        </div>
      </div>
      <div class="card">
        <div class="card__img">
            <img src="img/card2.jpg" alt="card2">
        </div>
        <div class="card__content">
            <div class="card__content-cat">BBB農園</div>
            <h2 class="card__content-ttl">Fresh Tougarashi</h2>
            <div class="card__content-tag">
                <p class="card__content-tag-item">100g</p>
                <p class="card__content-tag-item card__content-tag-item--last">500yen</p>
            </div>
        </div>
      </div>
      <div class="card">
        <div class="card__img">
            <img src="img/card2.jpg" alt="card2">
        </div>
        <div class="card__content">
            <div class="card__content-cat">CCC農園</div>
            <h2 class="card__content-ttl">Fresh Tougarashi</h2>
            <div class="card__content-tag">
                <p class="card__content-tag-item">100g</p>
                <p class="card__content-tag-item card__content-tag-item--last">500yen</p>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@if (Auth::check())
<p>ログイン中ユーザー: {{$user->name . ' メール' . $user->email . ''}}</p>
@else
<p>ログインしてください。（<a href="/login">ログイン</a>｜
  <a href="/register">登録</a>）</p>
@endif

@endsection