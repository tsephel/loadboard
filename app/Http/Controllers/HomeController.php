<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plan;

class HomeController extends Controller
{
    public function subscription(){

        $basic = Plan::where(['id'=> 1])->first();
        $premium = Plan::where(['id'=> 2])->first();
        $professional = Plan::where(['id'=> 3])->first();

        return view('frontend.home', compact('basic', 'premium', 'professional'));

    }
   
}
