<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//追記

class FarmerController extends Controller
{
    //shows "farmerHome.blade.php"
    public function farmerHome(){
        return view("farmerHome");
    }
}
