@extends('app')
@section('content')
<div class="products">
  <h2 class="">作品一覧</h2>
  <ul>
    @foreach($products as $product)
    <li>
      <a href="detail/{{$product->id}}">
        <div class="product_image"><img src="{{asset ('image/' . $product->image) }}" alt={{$product->title}}></div>
        <div class="product_about">
          <p class="title">{{$product->title}}</p>
          <div class="other">
            <div>
              <span class="author">作者：</span>
              <span ></span>
            </div>
            <div>
              <span>値段：</span>
              <span class="price">{{$product->price}}円</span>
            </div>
          </div>
        </div>
      </a>
    </li>
      @endforeach
  </ul>
</div>
@endsection
