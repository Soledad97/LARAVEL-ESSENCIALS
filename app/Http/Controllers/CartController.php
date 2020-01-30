<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;
use App\Product;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.cart.index',['cart' => session('cart')
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        $cart = session('cart');
        $cart->products()->attach(
        $request->get('product_id'), ['qty'=>$request->get('qty')]
      );
      session()->put('cart', $cart);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //return \Session::get('cart');
        return view('website.cart.show', ['cart' => Cart::findOrFail($cart)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $cart = session('cart');
        //$product->qty=1;

        // Hacer if mismo producto suma
      //  if (isset($cart['product_id'])) {

        }

        $cart->products()->sync([
          $request->get('product_id') => ['qty' => $request->get('qty')]
        ]);

        session()->put('cart, $cart');

        //return redirect()->route(website.cart.show);??
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = session('cart');
        $cart = products()->detach($request->get('product_id'));
        session()->put('cart', $cart);
    }
}
