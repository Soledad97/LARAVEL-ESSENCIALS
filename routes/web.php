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

Route::get('/products', 'productsController@index');
Route::get('/admin/products/add', 'productsController@create');
Route::get('/products/{id}', 'productsController@show');


Route::get('/categories', 'categoriesController@index');
Route::get('/admin/categories/add', 'categoriesController@create');
Route::get('/categories/{id}', 'categoriesController@show');




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
