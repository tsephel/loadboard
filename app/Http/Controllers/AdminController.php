<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trucks;
use App\Models\Type;
use App\Models\User;
use App\Models\Loads;

class AdminController extends Controller
{
    public function index(){

        $trucks = Trucks::paginate(10);
        $loads = Loads::paginate(10);
        $loads = Loads::paginate();
        $user = User::count();

        $truck = $trucks->count();
        $load = $loads->count();

        return view('admin.index', compact('truck', 'user', 'trucks', 'loads', 'load'));

    }

}
