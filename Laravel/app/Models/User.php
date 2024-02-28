<?php

namespace App;
use App\Product;
use App\Like;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','bio',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;

    public function products() {
        return $this->hasMany('App\Product');
    }

    ///中間テーブル
    public function favorites() {
        return $this->belongsToMany('App\Product');
    }

    // お気に入りにしてるユーザーを取得(多分違う)
    public function isFavorite($id) {
        return (boolean) $this->favorites()->where('product_id',$id)->exits();
    }

    //お気に入りしてるかどうか
    public function is_Like($post_id) {

    }
}
