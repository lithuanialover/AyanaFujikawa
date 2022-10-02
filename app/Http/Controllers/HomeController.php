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
        $user = Auth::user();
        $param = ['user' =>$user];

        return view('signin', $param);
    }

    public function signup(){
        return view("signup");
    }

    public function shopping(){
        return view("shopping");
    }
}
