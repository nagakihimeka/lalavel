<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FavoriteController extends Controller
{

  // お気に入り機能
  public function favorite($id) {
    ///ログインユーザーのID取得
    $user_id = Auth::user()->id;
    $product = Product::find($id);

    $favorite = \DB::table('product_user')->where('product_id',$id)->where('user_id',$user_id)->exists();

    $product->users()->sync($user_id);


    return redirect('top');
  }

  // お気に入り解除
  public function unfavorite($id) {
    $user_id = Auth::user()->id;
    $product = Product::find($id);
    $product->users()->detach($user_id);

    return redirect('top');
  }
}
