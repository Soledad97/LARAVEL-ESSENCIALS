<?php


// namespace App\Http\Controllers;
//use App\Product;
//use App\Category;
//use Illuminate\Http\Request;


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductPhoto;

class ProductPhotoController extends Controller
{
    
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('website.productsphotos.index', ['productsphotos' => ProductPhoto::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productsphotos.create', ['products' => product::all(
        )]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = ProductPhoto::create($request->all());
        $product = Product::findOrFail($request->product_id);

        return redirect('/products/' . $product->id);
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($photo)
    {
        return view('admin.productsphotos.edit', [
            'photo' => ProductPhoto::findOrFail($photo)
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
        $photo = ProductPhoto::find($id);
        $photo->update($request->all());
        $product = Product::findOrFail($request->product_id);
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
        $photo = ProductPhoto::findOrFail($id);

        $photo->delete();

        return redirect('/products');
    }
}
