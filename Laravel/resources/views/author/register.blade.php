@extends('app')
@section('content')
<div class="register">
  <h2>新規登録</h2>
  <form action="{{route('register')}}" method="post" class='register_form'>
    @csrf
    <div class="login_forms">
      @if($errors->has('name'))
      <span class="error_message">{{$errors->first('name')}}</span>
      @endif
      <div class="login_form">
        <label for="input_name">名前</label>
        <input type="text" id="input_name" name="name">
      </div>
       @if($errors->has('email'))
      <span class="error_message">{{$errors->first('email')}}</span>
      @endif
      <div class="login_form">
        <label for="input_email">メールアドレス</label>
        <input type="email" id="input_email" name="email">
      </div>
      @if($errors->has('bio'))
      <span class="error_message">{{$errors->first('bio')}}</span>
      @endif
      <div class="login_form">
        <label for="input_bio">生年月日</label>
        <input type="date" id="input_bio" name="bio">
      </div>
      @if($errors->has('password'))
      <span class="error_message">{{$errors->first('password')}}</span>
      @endif
      <div class="login_form">
        <label for="input_password" class="password">パスワード</label>
        <input type="password" id="input_password" name="password">
      </div>
      @if($errors->has('password_confirmation'))
      <span class="error_message">{{$errors->first('password_confirmation')}}</span>
      @endif
      <div class="login_form">
        <label for="input_password_confirm" >パスワード（確認用）</label>
        <input type="password" id="input_password_confirm" name="password_confirmation">
      </div>
    </div>
    <button type="submit">登録する</button>
  </form>
</div>
@endsection
