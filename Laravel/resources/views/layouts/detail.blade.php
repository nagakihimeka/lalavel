@extends('app')
@section('content')

@if(Auth::user() and Auth::user()->id == $product->user->id)
<div class="detail_auth">
  <a href="" class="detail_update">編集する</a>
  <a href="{{ route('product.delete',['id' => $product->id])}}" class="detail_delete" onclick='return confirm("本当に削除しますか？")'>削除する</a>
</div>
@endif

<div class="detail_container">
  <div class="detail_top">
    <div class="t_left">
      <img src="{{asset('image/' . $product->image)}}" alt="">
    </div>
    <div class="t_right">
      <h3 class="title">{{$product->title}}</h3>


      <div class="author">作者:
        <a href="{{ route('detail.author',['id' => $product->user->id])}}">{{$product->user->name}}</a>
      </div>

      <div class="buttons">
        <div class="buy">
          <div class="buy_price"><span>¥</span>{{$product->price}}</div>
          <button value="{{$product->id}}">購入する</button>
        </div>
        <div class="rent">
          <p>レンタル：</p>
          <div class="rent_price"><span>¥</span>{{$product->rent_price}}</div>
           <button value="{{$product->id}}">レンタルする</button>
        </div>
      </div>
    </div>
  </div>
  <div class="detail_bottom">

  </div>
</div>


@endsection
