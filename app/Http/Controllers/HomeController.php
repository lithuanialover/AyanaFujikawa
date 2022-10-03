<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//追記

class HomeController extends Controller
{
    //shows "home.blade.php"
    public function home(){
        return view("home");
    }

    public function signin(){
        return view('signin');
    }

    public function register(){
        return view("register");
    }

    public function shopping(){
        $user = Auth::user();
        $param = ['user' =>$user];

        return view("shopping", $param);
    }

    public function check(Request $request)
    {
    $text = ['text' => 'ログインして下さい。'];
    return view('signin', $text);
    }

    public function checkUser(Request $request)
    {
    $email = $request->email;
    $password = $request->password;
    if (Auth::attempt(['email' => $email,
            'password' => $password])) {
        $text =   Auth::user()->name . 'さんがログインしました';
    } else {
        $text = 'ログインに失敗しました';
    }
    return view('signin', ['text' => $text]);
    }
}
