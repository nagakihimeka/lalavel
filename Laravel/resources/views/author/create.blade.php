@extends('app')
@section('content')
<form action="/product_create">
<div class="product_form">
    <div class="product_left">
    <div class="product_image">
      <label for="image">作品</label>
      @if($errors->has('product_image'))
      <span class="error_message">{{$errors->first('product_image')}}</span>
      @endif
      <div class="create_image">
        <img id="create_image">
        <input type="file" src="test.png" name="product_image" id="image" class="image">
      </div>
    </div>
    <div class="product_title">
      <label for="title">作品のタイトル</label>
      @if($errors->has('product_title'))
      <span class="error_message">{{$errors->first('product_title')}}</span>
      @endif
      <input type="text" name="product_title" id="title">
    </div>
  </div>

  <div class="product_right">
      <div class="product_color">
        <label for="color">色</label>
        @if($errors->has('product_color'))
        <span class="error_message">{{$errors->first('product_color')}}</span>
        @endif
        <select name="product_color" id="color">
          <option value="selected">選択してください</option>
          <option value="1">赤</option>
          <option value="2">白</option>
          <option value="3">青</option>
          <option value="4">黒</option>
          <option value="5">緑</option>
          <option value="6">紫</option>
          <option value="7">黄色</option>
          <option value="8">ピンク</option>
          <option value="9">灰色</option>
          <option value="10">オレンジ</option>
        </select>
      </div>
      <div class="product_genre">
        <label for="genre">ジャンル</label>
        <select name="product_genre" id="genre">
          <option value="selected">選択してください</option>
          <option value="1">抽象</option>
          <option value="2">風景</option>
          <option value="3">人物</option>
          <option value="4">動物・生き物</option>
          <option value="5">花・植物</option>
          <option value="6">その他</option>
        </select>
      </div>
      <div class="product_technique">
        <label for="technique">技法</label>
        <select name="product_technique" id="technique">
          <option value="selected">選択してください</option>
          <option value="1">油彩</option>
          <option value="2">水彩</option>
          <option value="3">アクリル</option>
          <option value="4">日本画</option>
          <option value="5">パステル・クレヨン・鉛筆</option>
          <option value="6">ミクストメディア</option>
        </select>
      </div>
         @if($errors->has('product_price'))
        <span class="error_message">{{$errors->first('product_price')}}</span>
        @endif
      <div class="product_price">
        <label for="price">値段</label>
        <input type="text" name="product_price" id="price">
        <span>(買う)</span>
        <input type="text" name="product_price_r" id="price">
        <span>(レンタル)</span>
      </div>
      @if($errors->has('product_text'))
        <span class="error_message">{{$errors->first('product_text')}}</span>
        @endif
      <div class="product_text">
        <label for="text" class="text">メッセージ</label>
        <textarea name="product_text" id="text" cols="30" rows="10"></textarea>
      </div>
  </div>
</div>

  <div class="create_button">
    <input type="submit" >
  </div>
</form>

@endsection
