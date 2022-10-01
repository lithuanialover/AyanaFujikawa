<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //shows "home.blade.php"
    public function home(){
        return view("home");
    }

    public function signin(){
        return view("signin");
    }

    public function signup(){
        return view("signup");
    }

    public function shopping(){
        return view("shopping");
    }
}
