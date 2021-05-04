<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminTruckController;
use App\Http\Controllers\AdminTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminLoadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();


Route::resource('admin/profile', ProfileController::class);
// Route::get('/profile', function(){
//     return view('admin/profile');
// });

Route::get('/', function(){
    return view('frontend/home');
});


Route::get('/shipper', function(){
    return view('frontend/shipper');
});

Route::get('/broker', function(){
    return view('frontend/broker');
});

Route::get('/carrier', function(){
    return view('frontend/carrier');
});

// Route::get('/login', function(){
//     return view('frontend/login');
// });

// Route::get('/login', [LoginController::class])->name('login');


// Route::get('/signup', function(){
//     return view('frontend/signup');
// });






Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', [AdminController::class, 'index']);

    Route::resource('admin/users', AdminUsersController::class);
    Route::resource('admin/truck', AdminTruckController::class);
    Route::resource('admin/type', AdminTypeController::class);
    Route::resource('admin/load', AdminLoadController::class);
});

