{{-- imgが表示されない --}}
@extends('layouts.farmer-format')

@section('main')
<div class="cnt-cmn details">
  <div class="cnt-btm cnt-top">
        <div class="cnt-details flex-item">
            <form action="{{ route('product.edit', ['id'=>$products->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="details-img">
                        <label for="product_img">{{ __('画像') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                        {{-- <input type="file" name="img" value="{{$form->img}}"> --}}
                        <input type="file" name="img">
                    </div>
                    <div>
                        <label for="product_name">{{ __('商品名') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                        {{-- <input type="text" name="name" value="{{$form->name}}"> --}}
                        <input type="text" name="name">
                    </div>
                    <div>
                        <label for="product_farmer">{{ __('農家名') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                        {{-- <input type="text" name="farmer" value="{{$form->farmer}}"> --}}
                        <input type="text" name="farmer">
                    </div>
                    <div>
                        <label for="product_volume">{{ __('量') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                        {{-- <input type="text" name="volume" value="{{$form->volume}}">g --}}
                        <input type="text" name="volume">g
                    </div>
                    <div>
                        <label for="product_price">{{ __('価格') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                        {{-- <input type="text" name="price" value="{{$form->price}}">円 --}}
                        <input type="text" name="price">円
                    </div>
                    <div>
                        <label for="product_comments">{{ __('農家からのコメント') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                        {{-- <input type="textarea" name="comments" value="{{$form->comments}}"> --}}
                        <input type="textarea" name="comments">
                    </div>
                </fieldset>
                <button type="submit">更新</button>
            </form>
  </div>
  <div>
    <p>更新後の画面</p>

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
    <a href="/farmer/product/show/{id}">詳細ページへ</a>
  </div>
<div class="back-btn">
  <a href="/farmer/product/lists">一覧ページに戻る</a>
</div>
  </div>
@endsection