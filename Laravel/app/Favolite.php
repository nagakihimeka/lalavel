<?php

namespace App;
use App\User;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    // //ユーザーとお気に入りの1対多
    // public function user() {
    //     return $this->belongsTo('App\User');
    // }

    // ///投稿とお気に入りの1対多
    // public function product() {
    //     return $this->belongsTo('App\Product');
    // }
}
