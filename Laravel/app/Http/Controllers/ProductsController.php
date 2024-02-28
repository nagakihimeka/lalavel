<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('layouts.top',compact('products'));
    }

    public function createForm() {
       return view('author.create');
    }

    public function productCreate(Request $request) {
        $image = $request->input('product_image');
        $title = $request->input('product_title');
        $color = $request->input('product_color');
        $genre = $request->input('product_genre');
        $technique = $request->input('product_technique');
        $price = $request->input('product_price');
        $image = $request->input('product_image');
        $author = 1;//ログインユーザー


        Product::create(['author'=> $author,'title'=> $title,'color' => $color,'genre' => $genre,'technique' => $technique,'price' => $price,'image'=>$image]);
        return back();
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
}
