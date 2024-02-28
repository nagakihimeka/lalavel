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
      <div class=""><a href="">おすすめ作品</a></div>
      <div class=""><a href="">作品履歴</a></div>
    </div>
    <div class="menu_under">
      <div class=""><a href="">ご利用ガイド</a></div>
      <div class=""><a href="">アーティストの方はこちらから</a></div>
      <div class=""><a href="">お知らせ</a></div>
    </div>
  </div>

  <header class="header">
    <div class="header_left">
      <div class="logo"><a href="{{ url('top')}}"><img src="{{asset('image/logo.png')}}" alt="art"></a></div>
    </div>
    <div class="header_right">
      <div class="header_buy"><a href="">作品を買う</a></div>
      <div class="header_rent"><a href="">作品を借りる</a></div>
      <div class="header_search"><a href=""><img src="{{asset('image/seach.png')}}" alt="検索"></a></div>
      <div class="header_mine"><a href=""><img src="{{asset('image/icon.png')}}" alt="マイページ"></a></div>
      <div class="header_menu">
        <ul>
          <li><a href=""></a></li>
        </ul>
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
