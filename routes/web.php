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
// website.index.blade.php muestra el home de la pagina
Route::get('/', 'WebsiteController@index');

// website.product.index.blade.php muestra un listado de productos
Route::get('/products', 'ProductController@index');

// website.product.show.blade.php  muestra el detalle de un producto
Route::get('/products/{id}', 'ProductController@show');

// admin.product.create.blade.php  muestra el formulario para crear un producto
Route::get('/admin/products/add', 'ProductController@create');

// admin.product.edit.blade.php  muestra el formulario para editar un producto
Route::get('/admin/products/edit/{id}', 'ProductController@edit');




// website.orders.index.blade.php muestra un listado de mis compras
Route::get('/orders', 'OrderController@index');

// website.orders.show.blade.php  muestra el detalle de una compra
Route::get('/orders/{id}', 'OrderController@show');

// admin.orders.create.blade.php  muestra el formulario para finalizar la compra
Route::get('/orders/add', 'OrderController@create');


Route::group(['middleware'=>'cart'], function(){
  // website.cart.show.blade.php  muestra el detalle de una compra
  Route::get('/cart', 'CartController@index');

  // website.cart.create.blade.php muestra la creacion de un carrito
  Route::post('/cart/add', 'CartController@store');


});




// admin.customer.show.blade.php  muestra el formulario para finalizar la compra
Route::get('/profile', 'UserController@show');

Route::post('/profile', 'UserController@show');




Route::get('/categories', 'CategoryController@index');

Route::get('/categories/{id}', 'CategoryController@show');

Route::get('/admin/categories/add', 'CategoryController@create');

Route::get('/admin/categories/{id}/edit', 'CategoryController@create');


/*
Route::get('/payments', 'paymentsController@index');

Route::get('/payments/{id}', 'paymentsController@show');

Route::get('/admin/payments/add', 'paymentsController@create');

Route::get('/admin/payments/edit/{id}', 'paymentsController@create');
 */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
