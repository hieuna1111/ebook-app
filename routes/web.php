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
    Route::get('list', 'ProductController@index')->middleware("adminAuth")->name('admin-list-book');;
    Route::get('create', 'ProductController@create')->middleware("adminAuth");;
    Route::post('store', 'ProductController@store')->middleware("adminAuth");;
    Route::get('/{slug}/edit', 'ProductController@edit')->middleware("adminAuth");;
    Route::post('/{slug}/update', 'ProductController@update')->middleware("adminAuth");;
    Route::get('/{slug}/delete', 'ProductController@destroy')->middleware("adminAuth");;
  });

  Route::get('revenue', 'RevenueController@index');
});

Route::group(['namespace' => 'Web'], function () {
  Route::group(['prefix' => 'book'], function () {
    Route::get('list', 'ProductController@index')->name('list-book');

    Route::post('/{slug}/add-to-cart', 'ProductController@addToCart');
  });

  Route::group(['prefix' => 'cart'], function () {
    Route::get('list', 'CartController@index');
    Route::get('/update/{id}/book', 'CartController@update')->name('ajax-update-cart');
    Route::get('/checkout', 'CartController@checkout')->name('get-check-out');
  });
});

Route::group(['namespace' => 'Auth'], function () {
  Route::get('login', 'AuthController@index')->name('login');
  Route::post('signIn', 'AuthController@signIn')->name('sign-in');
});
