@extends('layouts.farmer-format2')

@section('main')
  <div class="cnt-cmn">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="cnt3">
      <h2 class="h2">農家HOME</h2>
      <div class="cnt-cards flex-item cnt-btm">
        <div class="card">
          <div class="card__img">
              <img src="img/card1.jpg" alt="">
          </div>
          <div class="card__content">
              <div class="card__content-cat">AAA農園</div>
              <h2 class="card__content-ttl">Fresh Komatsuna</h2>
              <div class="card__content-tag">
                  <p class="card__content-tag-item">100g</p>
                  <p class="card__content-tag-item card__content-tag-item--last">500yen</p>
              </div>
          </div>
        </div>
        <div class="card">
          <div class="card__img">
              <img src="img/card2.jpg" alt="">
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
              <img src="img/card2.jpg" alt="">
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
      <div class="btn cnt-btm flex-item">
        <a href="" class="btn btn-flat"><span>商品一覧へ</span></a>
      </div>
    </div>
  </div>
@endsection