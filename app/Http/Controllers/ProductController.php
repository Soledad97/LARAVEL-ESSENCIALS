<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    /*agregamos el request*/ 
    {

        $products = Product::paginate(10);
 
        return view('website.products.index',
        ['title'=>'listado de productos',
         'products' => $products,
         ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', 
        
        ['categories' => Category::all(), 'product' => new Product]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate ($request,
        [
        'title' => 'required',
        'stock' => 'required',
        'price' => 'required',
        'image' => 'requiered',
        ]);
        
        
        $product = Product::create($request->all());

        return redirect('/products/' . $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        return view('website.products.show', ['product' => Product::findOrFail($product)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        return view('admin.products.edit', [
            'categories' => Category::all(),
            'product' => Product::findOrFail($product)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate ($request,
        [
        'title' => 'required',
        'stock' => 'required',
        'price' => 'required',
        'image' => 'requiered',
        ]);
        
        
        
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/products/' . $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect('/products');
    }
}
