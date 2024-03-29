<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\Cart;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->limit(4)->get();
        $categories = Category::all();
        
        if(isset(session('cart')->id)){

            $cart = Cart::find(session('cart')->id);
            return view('website.products.index',
                [
                    'productos' => $products , 
                    'categories', $categories,
                    'cart' => $cart
                ]
            );
        }
        
        return view('website.products.index',
            [
                'productos' => $products , 
                'categories', $categories,
                'cart' => session('cart')
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
        'name' => 'required',
        'description' => 'required',
        'stock' => 'required',
        'price' => 'required',
        ]);

        $product = new Product;
       
        $product->name = $request->get('name');
       
        $product->description = $request->get('description');
       
        $product->stock = $request->get('stock');

        $product->price = $request->get('price');

        $product->save();

        if ($request->has('categories')) {
 //           foreach ($request->get('categories') as $category) {
                $product->categories()->attach($request->get('categories'));
   //         }
        }

        return redirect('products/' . $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        
        if(isset(session('cart')->id)){

            $cart = Cart::find(session('cart')->id);
            return view('website.products.show',
                [
                    'product' => $product , 
                    'categories', $categories,
                    'cart' => $cart
                ]
            );
        }
        
        return view('website.products.show',
            [
                'product' => $product , 
                'categories', $categories,
                'cart' => session('cart')
            ]
        );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.products.edit', [
            'categories' => Category::all(),
            'product' => Product::findOrFail($id),
           ]);
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
        $this->validate ($request,
        [
        'name' => 'required',
        'description' => 'required',
        'stock' => 'required',
        'price' => 'required',
        ]);

        $product = Product::find($id);
        $product->update($request->all());
        
        return redirect('products/' . $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products');
    }
}
