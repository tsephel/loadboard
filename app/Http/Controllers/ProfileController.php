<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trucks;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){

        $user = Auth::user();

        $trucks = Trucks::where('user_id', $user->id)->get();

        $truck = Trucks::count();

        return view('admin.profile.index', compact('user', 'trucks', 'truck'));
    }

  
}
