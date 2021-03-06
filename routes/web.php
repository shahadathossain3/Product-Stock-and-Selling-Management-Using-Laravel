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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ProductController@create')->middleware('auth')->name('add_product');
Route::post('/product', 'ProductController@store')->middleware('auth')->name('add_product.submit');
Route::get('/product/{id}', 'ProductController@show')->middleware('auth')->name('products.show');
Route::get('/customer', 'CustomerController@create')->middleware('auth')->name('add_customer');
Route::get('/show', 'ProductController@index')->middleware('auth')->name('show_all_product');
Route::get('/cart', 'CartController@index')->middleware('auth')->name('cart');
Route::post('/cart/store', 'CartController@store')->middleware('auth')->name('cart.store');
Route::post('/update/{id}', 'CartController@update')->middleware('auth')->name('carts.update');
Route::post('/delete/{id}', 'CartController@destroy')->middleware('auth')->name('carts.delete');
Route::get('/checkout', 'CheckoutController@index')->middleware('auth')->name('checkouts');
Route::post('/sell', 'SellController@store')->middleware('auth')->name('sell.submit');
Route::get('/sellinginfo', 'SellController@index')->middleware('auth')->name('selling_info');
Route::get('/makepdf', 'SellController@makepdf')->middleware('auth')->name('makepdf');


