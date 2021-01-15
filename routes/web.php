<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

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

Route::get('/foodmenu', function () {
    return view('foodmenu');
});

Route::get('/cartlist', function () {
    return view('cartlist');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('users');
    return redirect('login');
});


Route::get("/foodmenu",[FoodController::class,'indexFunction']);
Route::get("detail",[FoodController::class,'reviewItemFunction']); 
Route::get("review",[FoodController::class,'reviewItemFunction']);
Route::get("detail/{id}",[FoodController::class,'detailFunction']);
Route::get("review",[FoodController::class,'reviewListFunction']);
Route::get("search",[FoodController::class,'searchFunction']);
Route::post("add_to_cart",[FoodController::class,'addToCartFunction']);
Route::get("header",[FoodController::class,'cartItemFunction']); 
Route::get("cartlist",[FoodController::class,'cartListFunction']); 
Route::get("removecart/{id}",[FoodController::class,'removeCartFunction']); 
Route::get("reviewlist",[FoodController::class,'reviewListFunction']); 
Route::get("reviewlist",[FoodController::class,'reviewItemFunction']);
Route::get("createreview",[FoodController::class,'reviewStoreFunction']); 