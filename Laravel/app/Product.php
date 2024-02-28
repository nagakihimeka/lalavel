<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    // 編集できるカラムを指定
    'author','title','color','genre','technique','price','image'
  ];

  public $timestamps = false;
}
