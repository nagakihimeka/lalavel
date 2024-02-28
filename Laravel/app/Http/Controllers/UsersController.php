<?php

namespace App\Http\Controllers;

use Model\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    //マイページ
    public function profile() {
        return view('author.profile');
    }

}
