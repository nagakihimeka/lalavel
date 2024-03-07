<?php
use App\Http\Controllers\Auth\AuthController;
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


//ログイン画面の表示
Route::get('/',[AuthController::class,'showLogin'])->name('showLogin');
//ログインの処理
Route::get('/login','Auth\AuthController@login')->name('login');
Route::post('/login','Auth\AuthController@login')->name('login');
// トップ
Route::get('top', 'ProductsController@index')->name('top');
// 作品詳細ページ
Route::get('detail/{id}','ProductsController@detail')->name('detail');
//出品者詳細ページ
Route::get('detail/author/{id}','ProductsController@author')->name('detail.author');

// 新規登録
Route::get('/register','Auth\RegisterController@register')->name('register');
Route::post('/register','Auth\RegisterController@register')->name('register');

// お気に入り機能
Route::get('/product/{id}/favorite','FavoriteController@favorite')->name('favorite');
Route::post('/product/{id}/favorite','FavoriteController@favorite')->name('favorite');

// お気に入り解除
Route::get('/product/{id}/unfavorite','FavoriteController@unfavorite')->name('unfavorite');
Route::post('/product/{id}/unfavorite','FavoriteController@unfavorite')->name('unfavorite');

// お気に入り作品閲覧
Route::get('/favorite/show','ProductsController@show')->name('favorite.show');

// 作品検索機能
Route::get('/top/search','ProductsController@search')->name('product.search');

// ログインのみ表示
Route::group(['middleware' => 'auth'], function () {
    // マイページ
    Route::get('profile','UsersController@profile');
    // 出品画面(に遷移)
    Route::get('create_form','ProductsController@createForm');
    // 出品画面（処理）
    Route::get('product_create','ProductsController@productCreate');
    // 作品削除
    Route::get('product_delete/{id}','ProductsController@productDelete')->name('product.delete');
    Route::post('product_delete/{id}','ProductsController@productDelete')->name('product.delete');

        Route::get('logout','auth\AuthController@logout')->name('logout');
        Route::post('logout','auth\AuthController@logout')->name('logout');


});
