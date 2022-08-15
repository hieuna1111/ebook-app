<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
  Route::group(['prefix' => 'book'], function () {
    Route::get('list', 'ProductController@index');
    Route::get('create', 'ProductController@create');
    Route::post('store', 'ProductController@store');
    Route::get('/{slug}/edit', 'ProductController@edit');
    Route::post('/{slug}/update', 'ProductController@update');
    Route::get('/{slug}/delete', 'ProductController@destroy');
  });

  Route::get('revenue', 'RevenueController@index');
});

Route::group(['namespace' => 'Web'], function () {
  Route::group(['prefix' => 'book'], function () {
    Route::get('list', 'ProductController@index');

    Route::post('/{slug}/add-to-cart', 'ProductController@addToCart');
  });


  Route::group(['prefix' => 'cart'], function () {
    Route::get('list', 'CartController@index');
    Route::get('/update/{id}/book', 'CartController@update')->name('ajax-update-cart');
    Route::get('/checkout', 'CartController@checkout')->name('get-check-out');
  });
});
