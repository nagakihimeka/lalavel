<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app');
});
// トップ
Route::get('top', 'ProductsController@index');
// 出品画面(に遷移)
Route::get('create_form','ProductsController@createForm');
// 出品画面（処理）
Route::get('product_create','ProductsController@productCreate');
// 作品詳細ページ
Route::get('detail/{id}','ProductsController@detail');
