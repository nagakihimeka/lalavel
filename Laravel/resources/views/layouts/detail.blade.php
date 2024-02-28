@extends('app')
@section('content')
<div class="detail_container">
  <div class="detail_top">
    <div class="t_left">
      <img src="{{asset('image/' . $product->image)}}" alt="">
    </div>
    <div class="t_right">
      <h3 class="title">{{$product->title}}</h3>
      <div class="author">作者:
      </div>
      <div class="buttons">
        <div class="buy">購入
          <div class="buy_price">{{$product->price}}</div>
          <button value="{{$product->id}}">購入する</button>
        </div>
        <div class="rent">レンタル
          <div class="rent_price"></div>
           <button value="{{$product->id}}">レンタルする</button>
        </div>
      </div>
    </div>
  </div>
  <div class="detail_bottom">

  </div>
</div>


@endsection
