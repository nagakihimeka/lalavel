@extends('app')
@section('content')
<form method="POST" action="/login" class="login_form" id="login_form">
  @CSRF
  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
    </ul>
  </div>
  @endif
  <label for="inputEmail" >メールアドレス</label>
  <input type="email" name="email" id="inputEmail">
  <label for="inputPassword">パスワード</label>
  <input type="password" id="inputPassword" name="password">
  <button type="submit" form="login_form" value="ログイン">ログイン</button>
</form>
@endsection
