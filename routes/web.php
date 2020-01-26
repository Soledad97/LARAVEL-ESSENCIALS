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
Route::group(['prefix'=>'admin', 'middlerware'=>[]], function(){
  // tablas : views admin.index.blade.php
  Route::get('address', 'AddressController@index');
  Route::get('cart', 'CartController@index');
  Route::get('category', 'CategoryController@index');
  Route::get('payment', 'PaymentController@index');
  Route::get('photo', 'PhotoController@index');
  Route::get('product', 'ProductController@index');
  Route::get('purchase', 'PurchasesController@index');
  Route::get('role', 'RoleController@index');
  Route::get('user', 'UserController@index');

  //formularios : views admin.create.blade.php
  Route::get('category/add', 'CategoryController@create');
  Route::get('role/add', 'RoleController@create');
  Route::get('payment/add', 'PaymentController@create');
  Route::get('product/add', 'ProductController@create');

  //formularios Controller store
  Route::post('category/add', 'CategoryController@store');
  Route::post('role/add', 'RoleController@store');
  Route::post('payment/add', 'PaymentController@store');
  Route::post('product/add', 'ProductController@store');

  //formularios views admin.edit.blade.php
  Route::get('category/{id}/edit', 'CategoryController@edit');
  Route::get('role/{id}/edit', 'RoleControler@edit');
  Route::get('payment/{id}/edit', 'PaymentController@edit');
  Route::get('product/{id}/edit', 'ProductController@edit');

  //formularios controller update
  Route::patch('category/{id}', 'CategoryController@update');
  Route::patch('role/{id}', 'RoleController@update');
  Route::patch('payment/{id}', 'PaymentController@update');
  Route::patch('product/{id}', 'ProductController@update');

  //formularios controller destroy
  Route::delete('category/{id}', 'CategoryController@destroy');
  Route::delete('role/{id}', 'RoleController@destroy');
  Route::delete('payment/{id}', 'PaymentController@destroy');
  Route::delete('product/{id}', 'ProductController@destroy');
});
  Auth::routes();
  Route::get('/home', 'HomeController@index')->name('home');
