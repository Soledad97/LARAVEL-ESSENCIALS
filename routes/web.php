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



// website.categories.index.blade.php muestra un listado de categorias
Route::get('/categories', 'categoriesController@index');

// website.categories.show.blade.php  muestra el detalle de un categorieo
Route::get('/categories/{id}', 'categoriesController@show');

// admin.categories.create.blade.php  muestra el formulario para crear un categorieo
Route::get('/admin/categories/add', 'categoriesController@create');

// admin.categories.edit.blade.php  muestra el formulario para editar un categorieo
Route::get('/admin/categories/edit/{id}', 'categoriesController@edit');


// website.purchases.index.blade.php muestra un listado de mis compras
Route::get('/purchases', 'PurchaseController@index');

// website.purchases.show.blade.php  muestra el detalle de una compra
Route::get('/purchases/{id}', 'PurchaseController@show');

// admin.purchases.create.blade.php  muestra el formulario para finalizar la compra
Route::get('/purchases/add', 'PurchaseController@create');


// website.cart.show.blade.php  muestra el detalle de una compra
Route::get('/cart', 'CartController@show'); 

// website.cart.create.blade.php muestra la creacion de un carrito
Route::get('/cart/add', 'CartController@create');

// admin.customer.show.blade.php  muestra el formulario para finalizar la compra
Route::get('/profile', 'UserController@show');

Route::post('/profile', 'UserController@show'); 




Route::get('/categories', 'categoriesController@index');

Route::get('/categories/{id}', 'categoriesController@show');

Route::get('/admin/categories/add', 'categoriesController@create');

Route::get('/admin/categories/edit/{id}', 'categoriesController@create');



Route::get('/payments', 'paymentsController@index');

Route::get('/payments/{id}', 'paymentsController@show');

Route::get('/admin/payments/add', 'paymentsController@create');

Route::get('/admin/payments/edit/{id}', 'paymentsController@create');




//no van//

Route::post('/admin/products/{id}', function ($id) {
    return view ('product_detail');//el admin modifica el pto
});
Route::get('/admin/products/create', function () {
    return view ('product_detail'); // crea el prod.
});
Route::post('/admin/products/create', function () {
    return view ('product_detail');//el admin creo el pto y lo guarda en la bd
});
Route::get('/categories', function () {
    return view('me muestra todas las categorias');// solo las que tenemos creadas
});
Route::get('/registration', function () {
    return view('registration-form'); //aca muestra el formulario de registracion
});
Route::post('/registration', function () {
    return view('user-info'); // muestra todos los datos del usuario, aca se iria al login
});
Route::get('/login', function () {
    return view('login-form'); // aca se pasa al perfil
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/cart', function () {
    return view('cart'); // me muestra los productos seleccionados para comprar
});
Route::post('/cart', function () {
    return view('cart'); // agrego producto al carro
});
Route::post('/cart/buy', function () {
    return view('order'); // compro y toma los datos para la orden de compra
});
