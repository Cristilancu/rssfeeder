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

Route::get('feeder', 
  'laraveldaily\home\HomeController@index');
Route::get('feed/{id}', 
  'laraveldaily\home\HomeController@detail');
Route::post('feed/feed_load/{id}/{limit}', 
  'laraveldaily\home\HomeController@load');
Route::post('feeder', 
  'laraveldaily\home\HomeController@add');
