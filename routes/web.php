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







Route::get('/contact-us','ContactController@contact');

Route::get('/home', 'HomeController@index')->name('home'); 

Route::post('/contact-us', 'ContactController@contactSubmit')->name('contact.submit');
