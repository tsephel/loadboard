<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminTruckController;
use App\Http\Controllers\AdminTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminLoadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserDashboardController;

use App\Http\Controllers\GoogleController;


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



Route::get('/', [HomeController::class, 'subscription'])->name('home');


Route::get('/shipper', function(){
    return view('frontend/shipper');
});

Route::get('/broker', function(){
    return view('frontend/broker');
});

Route::get('/carrier', function(){
    return view('frontend/carrier');
});

Route::get('/maps', function(){
    return view('users/map/mapSearch');
});

Route::prefix('subscribe')->name('subscribe.')->group(function(){

    Route::get('/', [SubscriptionController::class, 'show'])->name('show');
    Route::post('/', [SubscriptionController::class, 'store'])->name('store');
    Route::get('/approval', [SubscriptionController::class, 'approval'])->name('approval');
    Route::get('/cancelled', [SubscriptionController::class, 'cancelled'])->name('cancelled');


});

// Route::get('auto-complete', [GoogleController::class, 'index']);


Route::group(['middleware'=>['auth', 'admin']], function(){

    Route::resource('/admin/users', AdminUsersController::class);
    Route::resource('/admin/type', AdminTypeController::class);
    Route::resource('/admin/verify', VerifyController::class);

});

Route::group(['middleware'=>['auth']], function(){

    Route::get('/userdash', [UserDashboardController::class, 'userDash']);


});

Route::group(['middleware'=>['auth']], function(){

    Route::get('/admin', [AdminController::class, 'index']);
    Route::resource('/admin/truck', AdminTruckController::class);
    Route::resource('/admin/load', AdminLoadController::class);
    Route::resource('/profile', ProfileController::class);
    Route::get('truck/search/', [ AdminTruckController::class, 'searchTruck'])->name('searchTruck');
    Route::get('load/search/', [ AdminLoadController::class, 'searchLoad'])->name('searchLoad');

});

