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
  Route::post('room/create', 'Admin\RoomController@create')->middleware('auth');
  Route::get('room', 'Admin\RoomController@index')->middleware('auth');
  Route::get('room/edit',  'Admin\RoomController@edit')->middleware('auth');
  Route::post('room/edit', 'Admin\RoomController@update')->middleware('auth');
  Route::get('room/delete', 'Admin\RoomController@delete')->middleware('auth');
});

Route::get('/creata/index', 'PagesController@index');
Route::view('/crecte', 'UsersController@create');
Route::post('/posts', 'UsersController@save');
Route::get('/users/{user}', 'PagesController@confirm');
Route::post('/crecte', 'UsersController@delete');

Route::get('/', 'RoomController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
