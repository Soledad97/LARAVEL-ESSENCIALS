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
Route::get('/', 'websiteController@index');


//PRODUCTOS

// website.product.index.blade.php muestra un listado de productos
Route::get('/products', 'ProductController@index');

// admin.product.create.blade.php  muestra el formulario para crear un producto
Route::get('/admin/products/add', 'ProductController@create');

//admin.ptoduct.store.blade.php guarda la la creacion del producto
Route::post('/admin/products/add', 'ProductController@store');

// website.product.show.blade.php  muestra el detalle de un producto
Route::get('/products/{id}', 'ProductController@show');

// admin.product.edit.blade.php  muestra el formulario para editar un producto
Route::get('/admin/products/{id}/edit', 'ProductController@edit');
Route::patch('/admin/products/{id}', 'ProductController@update');
//admin.product.destroy.blade.php elimina el producto
Route::delete('/admin/products/', 'ProductController@destroy');

//ORDER

// website.orders.index.blade.php muestra un listado de mis compras
Route::get('/orders', 'OrderController@index');
// website.orders.show.blade.php  muestra el detalle de una compra
Route::get('/orders/{id}', 'OrderController@show');
// admin.orders.create.blade.php  muestra el formulario para realizar la compra
Route::get('/orders/add', 'OrderController@create');
//website.orders.store.blade.php sube los datos que completo el usuario en la orden para poder hacer la compra
Route::post('/orders/add', 'OrderController@store');
//customer.orders.edit.blade.php muestra los cambios realizados en la orden.
Route::get('/orders', 'OrderController@edit');
Route::patch('/orders', 'OrderController@update');
//admin.order.destroy.blade.php elimina el producto
Route::delete('/admin/orders/', 'OrderController@destroy');


//CARRITO

//agrupamos las funciones
Route::group(['middleware'=>'cart'], function(){
  // website.cart.show.blade.php  muestra el detalle de una compra
Route::get('/cart', 'CartController@index');

  // website.cart.create.blade.php muestra la creacion (no es directamente la creacion ya que siempre hay un carrito vacio esperando) de un carrito
Route::post('/cart/add', 'CartController@store');

//website.cart.edit.blade.php edita el CARRITO
Route::get('/cart', 'CartController@edit');

//website.cart.update.blade.php manda los cambios editados
Route::patch('/cart', 'CartController@update');

//como pago el carro

});

 //USUARIO

 // website.users.index.blade.php muestra un listado de los usuarios
 Route::get('/users', 'UserController@index');

// website.customer.show.blade.php  muestra el detalle de un usuario
Route::get('/profile', 'UserController@show');

Route::post('/profile', 'UserController@show');




Route::get('/categories', 'CategoryController@index');

Route::get('/categories/{id}', 'CategoryController@show');

Route::group(['prefix'=> 'admin'], function(){

Route::get('/categories/add', 'CategoryController@create');

Route::post('/categories/add', 'CategoryController@store');

Route::get('/categories/{id}/edit', 'CategoryController@edit');

Route::patch('/categories/{id}', 'CategoryController@update');

Route::delete('/categories/{id}', 'CategoryController@destroy');
});

Route::get('/payments', 'PaymentController@index');
Route::get('/payments/{id}', 'PaymentController@show');

//::group(['prefix => admin'], function(){

Route::get('/admin/payments/add', 'PaymentController@create');
Route::post('/admin/payments/add', 'PaymentController@store');
Route::get('/admin/payments/{id}/edit', 'PaymentController@edit');
Route::patch('/admin/payments/{id}', 'PaymentController@update');
Route::delete('/admin/payments/{id}', 'PaymentController@destroy');
//)};
  Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
