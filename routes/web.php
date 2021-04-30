<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminTruckController;
use App\Http\Controllers\AdminTypeController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/shipper', function(){
    return view('frontend/shipper');
});

Route::get('/broker', function(){
    return view('frontend/broker');
});

Route::get('/carrier', function(){
    return view('frontend/carrier');
});

Route::get('/login', function(){
    return view('frontend/login');
});


Route::get('/signup', function(){
    return view('frontend/signup');
});






Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', [AdminController::class, 'index']);

    Route::resource('admin/users', AdminUsersController::class);
    Route::resource('admin/truck', AdminTruckController::class);
    Route::resource('admin/type', AdminTypeController::class);
});

