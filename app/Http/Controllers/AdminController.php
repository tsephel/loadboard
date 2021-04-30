<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trucks;
use App\Models\Type;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){

        $truck = Trucks::count();
        $type= Type::count();
        $user = User::count();

        return view('admin.index', compact('truck', 'type', 'user'));

    }
}
