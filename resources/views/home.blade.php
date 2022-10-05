@extends('layouts.format')

@section('main')
  <div class="cnt1 relative">
    <div class="bg-grn flex-item">
      <img src="img/logo-green.PNG" alt="KyoVegロゴ" class="cnt1-logo">
    </div>
    <div class="bg-wht">
    </div>
    <img src="img/cnt1.jpg" alt="veg.jpg" class="cnt1-veg absolute ">
  </div>
  <div class="cnt-cmn">
    <div class="cnt2">
      <h2 class="h2">About</h2>
      <p class="cnt-btm">食文化の歴史とともに発展した京野菜の魅力を広め、<br>
        京野菜を育てる農家と消費者をつなげる「輪」としてKyoVegがあります。<br>
        ただ野菜を買うのではなく、生産者の想いと一緒に野菜を堪能する。<br>
        手間暇かけて育てられた野菜は絶品です。<br>
        新たな京野菜の出会いとともに、伝統を後世に残しませんか？
      </p>
      <img src="img/about1.jpg" style="width:100%" class="cnt-btm">
    </div>
    <div class="cnt3">
      <h2 class="h2">Shopping</h2>
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
    <div class="cnt4">
      <h2 class="h2">News</h2>
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
      <div class="btn cnt-btm">
        <a href="" class="btn btn-flat"><span>ニュース一覧へ</span></a>
      </div>
    </div>
  </div>
@endsection