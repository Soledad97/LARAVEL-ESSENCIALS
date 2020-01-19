<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Order;
use Illuminate\Http\Request;

class cartController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.carts.index', [
          'cart' => session('cart')
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
dd($request->all());
    }


    public function edit($cart)
    {
        return view ('admin.carts.edit', ['cart' => Cart::findOrFail($cart)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //el carro se destruye?
    }
}


/** CREAR UN MIDDLEWARE
 * Se va a guadar en app/http/middleware/CartMiddleware
 * php artisan make:middlewarer CartMiddleware
 * 
 * Registrar middleware
 * agregar en el archivo app/http/kernel.php
 * dentro del array $routeMiddleware
 * 
 * 'cart' => \app\http\middleware\CartMiddleware::class,
 * 
 * \\utilizar en la rutas que corresponda
 * 
 * route::group(['middleware' =>'cart'], function (){
 *       route::get('/products/{id}', 'ProductsController@show');
 * });
 * 
 * siempre tiene  q haber un next en el middleware
 * 
 * 
 * if(session('cart')){
 *    
 *    session('cart','new cart')
 * }
 * 
 * return $next($request);
 * 
 * 
 * 
 * 
 * 
 * 
 * $user =app/user::find(1);
 * 
 * $user->roles()->attach($roleId);
 * 
 * 
 * 
 * 
 * $cart = session('cart');
 * 
 * $cart->products()->attach(
 *     $request->get('product_id'), ['qty'-> $request->get('qty')]
 * );
 * 
 * session()->put('cart','$cart');
 * 
 * 
 * actualizar en pivot en sync
 * 
 * */


















