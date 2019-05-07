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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
  Route::get('room/create', 'Admin\RoomController@add')->middleware('auth');
  Route::post('room/create', 'Admin\RoomController@create');
  Route::get('room', 'Admin\RoomController@index');
  Route::get('room/edit',  'Admin\RoomController@edit');
  Route::post('room/edit', 'Admin\RoomController@updeta');
  Route::get('room/delete', 'Admin\RoomController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
