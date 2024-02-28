@extends('app')
@section('content')
<form method="POST" action="{{route('login')}}" class="login_form">
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
  <button type="submit">ログイン</button>
</form>
@endsection
