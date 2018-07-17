<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','home@index')->name('landing');
Route::get('/cart','CartController@index')->name('cart.show');
Route::post('/cartadd','CartController@store')->name('cart.store');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.delete');
Route::get('/category','CategoryController@index')->name('category.show');
Route::get('/product','singleController@index')->name('product.show');
//Route::get('/admin','AdminController@index')->name('admin.show');
Route::get('/contact-us','contact_us@index')->name('contact');
Route::get('/about-us','contact_us@store')->name('about');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
