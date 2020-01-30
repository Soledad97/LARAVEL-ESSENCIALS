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
// website.index.blade.php muestra el home de la pagina

Route::get('/', 'WebsiteController@index');


Route::get('/products', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/purchase', 'PurchaseController@index');
Route::get('/purchase/{id}', 'PurchaseController@show');

Route::get('/category', 'CategoryController@index');
Route::get('/category/{id}', 'CategoryController@show');


// admin.purchases.create.blade.php  muestra el formulario para finalizar la compra

//CUSTOMER
Route::group(['prefix'=>'customer'], function(){

Route::get('/profile', 'UserController@show');
Route::post('/profile', 'UserController@update');
Route::get('/purchase/add', 'PurchaseController@create');
Route::get('/purchase/edit/{id}', 'PurchasesController@edit');

});

//CART
Route::group(['middleware'=>'cart'], function(){
  Route::patch('/cart', 'CartController@update');
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
  Route::get('purchase', 'PurchasesController@index');

  //formularios : views admin.create.blade.php
  Route::get('category/add', 'CategoryController@create');
  Route::get('role/add', 'RoleController@create');
  Route::get('payment/add', 'PaymentController@create');
  Route::get('product/add', 'ProductController@create');
  Route::get('/photos/add', 'PhotoController@create');

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
