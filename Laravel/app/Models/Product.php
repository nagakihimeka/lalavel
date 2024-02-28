<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    // 編集できるカラムを指定
    'user_id','title','color','genre','technique','price','image','rent_price','text',
  ];

  public $timestamps = false;

  public function user() {
    return $this->belongsTo('App\User');
  }
  public function users() {
    return $this->belongsToMany('App\User');
  }

  // public function LikeProduct() {
  //   return $this->belongsToMany('App\Like','product_user','user_id','product_id');
  // }
}
