@extends('app')
@section('content')



<div class="favorite">
  <h2>お気に入り</h2>
  <ul>
    @foreach($products as $product)
    <li>
      <a href="{{ route('detail',['id'=>$product->id])}}">
        <div class="product_image"><img src="{{asset ('image/' . $product->image) }}" alt={{$product->title}}></div>
        <div class="product_about">
          <p class="title">{{$product->title}}</p>
          <div class="other">
            <div>
              <span class="author">作者：{{$product->user->name}}</span>
              <span ></span>
            </div>
            <div>
              <span>値段：</span>
              <span class="price">{{$product->price}}円</span>
            </div>
            <div class="post_favorite">
              if()
              <p class="like_btn"><a href="product/{{$product->id}}/favorite">お気に入り</a></p>

              <p class="un_like_btn"><a href="product/{{$product->id}}/unfavorite">お気に入りいりを解除</a></p>

            </div>
          </div>
        </div>
      </a>
    </li>
      @endforeach
    </ul>
</div>



@endsection
