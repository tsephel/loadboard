<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Loads;
use App\Models\Trucks;

class UserDashboardController extends Controller
{
    public function userDash(){
        $loads = Loads::orderBy('created_at', 'desc')->get();
        $trucks = Trucks::orderBy('created_at', 'desc')->get();

        return view('users.index', compact('loads', 'trucks'));
    }
}
