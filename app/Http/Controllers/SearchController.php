<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category; 
use App\Cart;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $name = $request->get('search');
        
        $products = Product::where('name','LIKE',"%".$name."%")->limit(3)->get();

        $categories = Category::all();
        
        if(isset(session('cart')->id)){

            $cart = Cart::find(session('cart')->id);
            return view('website.products.index',
                [
                    'productos' => $products , 
                    'categories', $categories,
                    'cart' => $cart,
                    'termino' => $name
                ]
            );
        }
        
        return view('website.products.index',
            [
                'productos' => $products , 
                'categories', $categories,
                'cart' => session('cart'),
                'termino' => $name
            ]
        );
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('website.categories.show', ['category' => Category::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

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
        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
    }
}