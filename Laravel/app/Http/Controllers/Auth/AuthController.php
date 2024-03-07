<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\LoginFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // ログイン画面
    public function showLogin() {
        return view('login.login_form');
    }
    // ログイン処理
    public function login(LoginFormRequest $request) {
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)) {
            return redirect('top')->with('login_success','ログインしました');
        }
        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route('top');
    }
}
