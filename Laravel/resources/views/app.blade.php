<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

   <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- fontawesome -->
    <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">

</head>
<body>
  <div class="menu">
    <div class="menu_top">
      <div class=""><a href="">作品を買う</a></div>
      <div class=""><a href="">作品を借りる</a></div>
    </div>
    <div class="menu_middle">
      <div class=""><a href="">作品一覧</a></div>
      <div class=""><a href="">ジャンル</a></div>
      <div class=""><a href="{{route('favorite.show')}}">お気に入り作品</a></div>
      <div class=""><a href="">作品履歴</a></div>
    </div>
    <div class="menu_under">
      <div class=""><a href="">ご利用ガイド</a></div>
      <div class=""><a href="">アーティストの方はこちらから</a></div>
      <div class=""><a href="">お知らせ</a></div>
    </div>
    <div class="">
      <div class="">
        @if( Auth::check() )
        <a href="{{route('logout')}}">ログアウト</a>
        @else
        <a href="{{route('showLogin')}}">ログイン</a>
        @endif
      </div>
    </div>
  </div>

    <div class="modal_search">
      <div class="modal-close">×</div>
      <form class="modal_content" id="searchRequest" action="{{ route('product.search')}}">
        <div class="modal-title">絞り込み検索</div>
        <ul class="modal-items">
          <li>
            <label class="search-title" for="order">並び順</label>
            <select form="searchRequest"  name="order" id="order">
              <option value="1">人気順</option>
              <option value="2">新着順</option>
              <option value="3">価格が低い順</option>
              <option value="4">価格が高い順</option>
          </li>
          <li>
            <label form="searchRequest" class="search-title" name="price" for="price">価格</label>
            <select  id="price">
          </li>
          <li>
            <p class="search-title" for="color">カラー</p>
              <input name="color" form="searchRequest" type="radio" value="1">赤
              <input name="color" form="searchRequest" type="radio" value="2">青
              <input name="color" form="searchRequest" type="radio" value="3">緑
              <input name="color" form="searchRequest" type="radio" value="4">白
              <input name="color" form="searchRequest" type="radio" value="5">黒
              <input name="color" form="searchRequest" type="radio" value="6">緑
              <input name="color" form="searchRequest" type="radio" value="7">紫
              <input name="color" form="searchRequest" type="radio" value="8">黄色
              <input name="color" form="searchRequest" type="radio" value="9">グレー
              <input name="color" form="searchRequest" type="radio" value="10">ピンク
              <input name="color" form="searchRequest" type="radio" value="11">オレンジ

          </li>
          <li>
            <p class="search-title">ジャンル</p>
            <input name="genre" form="searchRequest" type="radio" value="1">抽象
            <input name="genre" form="searchRequest" type="radio" value="2">風景
            <input name="genre" form="searchRequest" type="radio" value="3">人物
            <input name="genre" form="searchRequest" type="radio" value="4">動物・生き物
            <input name="genre" form="searchRequest" type="radio" value="5">花・植物
            <input name="genre" form="searchRequest" type="radio" value="6">その他のジャンル
          </li>
          <li>
            <p class="search-title" for="">技法</p>
            <input name="technique" form="searchRequest" type="radio" value="1">油彩
            <input name="technique" form="searchRequest" type="radio" value="2">水彩
            <input name="technique" form="searchRequest" type="radio" value="3">アクリル
            <input name="technique" form="searchRequest" type="radio" value="4">日本画
            <input name="technique" form="searchRequest" type="radio" value="5">パステル・クレヨン・色鉛筆
            <input name="technique" form="searchRequest" type="radio" value="6">ミクストメディア
          </li>
          <li>
            <label class="search-title" for="keyword">キーワード</label>
            <input name="keyword" form="searchRequest" type="text" id="keyword" placeholder="作品名・アーティスト名">
          </li>
          <input type="submit"  form="searchRequest" value="絞り込む"></input>
        </ul>
      </div>
    </div>

  <header class="header">
    <div class="header_left">
      <div class="logo"><a href="{{ url('top')}}"><img src="{{asset('image/logo.png')}}" alt="art"></a></div>
      <div class="">
        @if( Auth::check() )
        <div class="">{{Auth::user()->name}}さん</div>
        @else
        <div class="">ログインしていません</div>
        @endif

      </div>
    </div>
    <div class="header_right">
      <div class="header_buy"><a href="">作品を買う</a></div>
      <div class="header_rent"><a href="">作品を借りる</a></div>
      <div class="header_search modal-open"><img src="{{asset('image/seach.png')}}" alt="検索"></a></div>
      <div class="header_mine"><a href=""><img src="{{asset('image/icon.png')}}" alt="マイページ"></a></div>
      <div class="header_menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>

  <div class="content">
    @yield('content')
  </div>

<footer class="footer">
  <div class="footer_top">
    <div class="footer_logo"><a href="{{ url('top')}}"><img src="{{asset('image/logo.png')}}" alt=""></a></div>
  </div>
  <div class="footer_middle">
    <ul>
      <li><a href="">初めての方はこちらから</a></li>
      <li><a href="">アーティストの方はこちらから</a></li>
      <li><a href="">サイトについて</a></li>
      <li><a href="">利用規約</a></li>
      <li><a href="">プライバシーポリシー</a></li>
      <li><a href="">お問い合わせ</a></li>
    </ul>
  </div>
  <div class="footer_bottom">
    <ul class="sns_list">
      <li><a href="">inst</a></li>
      <li><a href="">x</a></li>
      <li><a href="">facebook</a></li>
    </ul>
  </div>
</footer>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}" rel="stylesheet"></script>
</body>
</html>
