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

//WEBSITE

Route::get('/','WebsiteController@index')->middleware('cart');

Route::get('/products', 'ProductController@index')->middleware('cart');
Route::get('/products/{id}', 'ProductController@show')->middleware('cart');
Route::get('/category', 'CategoryController@index')->middleware('cart');
Route::get('/category/{id}', 'CategoryController@show')->middleware('cart');

Route::get('/search', 'SearchController@index')->middleware('cart');

Route::get('/nosotros', function () {
  return view('nosotros');
});

Route::get('/cart', function () {
  return session('cart');
})->middleware('cart');

//CUSTOMER
Route::group(['prefix'=>'customer', 'middleware' => ['cart']], function(){

  Route::get('/profile', 'UserController@show');
  Route::patch('/profile', 'UserController@update');
  Route::get('/purchase/add', 'PurchaseController@create');
  Route::get('/purchase/edit/{id}', 'PurchaseController@edit');
  Route::post('/purchase/add', 'PurchaseController@store');
  Route::get('/address/add', 'AddressController@create');
  Route::post('/address/add', 'AddressController@store');
  Route::get('/address/{id}/edit', 'AddressController@edit');
  Route::patch('/address/{id}', 'AddressController@update');
  Route::post('/cart', 'CartController@store');
  Route::patch('/cart', 'CartController@update');
  Route::delete('/cart/{id}', 'CartController@destroy');

});

//ADMIN
Route::group(['prefix'=>'admin', 'middlerware'=>[]], function(){


  // tablas : views admin.index.blade.php
  Route::get('address', 'AddressController@index');
  Route::get('category', 'CategoryController@index');
  Route::get('payment', 'PaymentController@index');
  Route::get('photo', 'PhotoController@index');
  //Route::get('product', 'ProductController@index');
  Route::get('role', 'RoleController@index');
  Route::get('user', 'UserController@index');
  Route::get('purchase', 'PurchaseController@index');
  //formularios : views admin.create.blade.php
  Route::get('category/add', 'CategoryController@create');
  Route::get('role/add', 'RoleController@create');
  Route::get('payment/add', 'PaymentController@create');
  Route::get('product/add', 'ProductController@create');
  Route::get('photos/add', 'PhotoController@create');
  //formularios Controller store
  Route::post('category/add', 'CategoryController@store');
  Route::post('role/add', 'RoleController@store');
  Route::post('payment/add', 'PaymentController@store');
  Route::post('products/add', 'ProductController@store');

  Route::get('payment/{id}', 'PaymentController@show');
  //formularios views admin.edit.blade.php
  Route::get('category/{id}/edit', 'CategoryController@edit');
  Route::get('role/{id}/edit', 'RoleController@edit');
  Route::get('payment/{id}/edit', 'PaymentController@edit');
  Route::get('product/{id}/edit', 'ProductController@edit');
  Route::get('photos/{id}/edit', 'PhotoController@edit');
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
