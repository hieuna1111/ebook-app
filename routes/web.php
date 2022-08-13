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
  Route::group(['prefix' => 'product'], function () {
    Route::get('list', 'ProductController@index');
    Route::get('create', 'ProductController@create');
    Route::post('store', 'ProductController@store');
    Route::get('/{slug}/edit', 'ProductController@edit');
    Route::post('/{slug}/update', 'ProductController@update');
    Route::get('/{slug}/delete', 'ProductController@destroy');
  });
});
