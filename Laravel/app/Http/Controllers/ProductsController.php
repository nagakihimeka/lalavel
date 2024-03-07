<?php

namespace App\Http\Controllers;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ProductsController extends Controller
{
    public function index() {
        $products = Product::get();

            //登録があるかチェック
    $id = Auth::id();
     $favorite = \DB::table('product_user')->where('user_id',$id)->exists();
        return view('layouts.top',compact('products','favorite'));
    }

    public function createForm(Request $request) {
        $product = new Product;
       return view('author.create');
    }

    public function productCreate(Request $request) {

        //バリデーション
        if($request) {
            $request->validate([
                'product_image' => 'required',
                'product_title' => 'required',
                'product_color' => 'required',
                'product_genre' => 'required',
                'product_technique' => 'required',
                'product_price' => 'required',
                'product_text' => 'required'
            ]);
        }

        $image = $request->input('product_image');
        $title = $request->input('product_title');
        $color = $request->input('product_color');
        $genre = $request->input('product_genre');
        $technique = $request->input('product_technique');
        $price = $request->input('product_price');
        $image = $request->input('product_image');
        $text = $request->input('product_text');
        $author = Auth::user()->id;

        Product::create(['author'=> $author,'title'=> $title,'color' => $color,'genre' => $genre,'technique' => $technique,'price' => $price,'image'=>$image,'text' => $text]);
        return view('.top');
    }

    public function detail($id) {
        //作品のidを受け取る
        $product = Product::find($id);
    //    for($i = 2; $i <= 100; $i * 2) {
    //     dd($i);
    //    }


        // そのIDの作品情報を取得し、ビューに渡す
        return view('layouts.detail',compact('product'));
    }

    // お気に入り作品（閲覧）
    public function show() {
        $user = auth::id();
        $id = \DB::table('product_user')->where('user_id',$user)->pluck('product_id');
        $products = Product::whereIn('id',$id)->get();

        return view('author.favorite',compact('products'));
    }

    //作品作者詳細ページ
    public function author($id) {
        $user = User::find($id);
        return view('layouts.author');
    }

    // 作品削除
    public function productDelete($id) {
        Product::find($id)->delete();
        return back();//理想は自分の出品した一覧に遷移
    }

    // 作品絞り込み検索
    public function search(Request $request) {
        $order = $request->order;
        $price = $request->price;
        $color = $request->color;
        $genre = $request->genre;
        $technique = $request->technique;
        $keyword = $request->keyword;

    }

}
