<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //shows "home.blade.php"
    public function index(){
        return view("index");
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
