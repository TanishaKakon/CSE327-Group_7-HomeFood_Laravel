<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contact-us', function () {
    return 'contact-us' ;
});  
Route::get('/ordernow', function () {
    return view('ordernow');
});

Route::get('/contact-us','ContactController@contact');

Route::get('/home', 'HomeController@index')->name('home'); 

Route::post('/contact-us', 'ContactController@contactSubmit')->name('contact.submit');

Route::get("/foodmenu",[FoodController::class,'indexFunction']);
Route::get("detail/{id}",[FoodController::class,'detailFunction']);
Route::get("search",[FoodController::class,'searchFunction']);
Route::post("add_to_cart",[FoodController::class,'addToCartFunction']);
Route::get("cartlist",[FoodController::class,'cartListFunction']); 
Route::get("removecart/{id}",[FoodController::class,'removeCartFunction']);
Route::get("ordernow",[FoodController::class,'orderNow']); 
Route::post("orderplace",[FoodController::class,'orderPlace']);
Route::get("myorders",[FoodController::class,'myOrders']);





?>

