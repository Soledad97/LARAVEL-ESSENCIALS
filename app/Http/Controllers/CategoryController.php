<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Photo;
use App\Cart;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        
        if(isset(session('cart')->id)){

            $cart = Cart::find(session('cart')->id);
            return view('website.index',
                [
                    'categories', $categories,
                    'cart' => $cart
                ]
            );
        }
        
        return view('website.category.index',
            [
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
        return view('admin.category.create',[
            'categoria' => new Category
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
        $categoria = new Category;

        if($request->file('photo')){
            $photo = new Photo;
            $imageName = time().'.'.$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('categories'), $imageName);
            $photo->source = $imageName;
            $photo->type = "category";
            $photo->save();
            $categoria->photo_id = $photo->id;
        }

        $categoria->name = $request->name;
        $categoria->save();
        
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();

        if(isset(session('cart')->id)){

            $cart = Cart::find(session('cart')->id);
            return view('website.category.show',
                [
                    'category' => Category::findOrFail($id),
                    'categories' => $categories,
                    'cart' => $cart
                ]
            );
        }
        
        return view('website.category.show',
            [
                'category' => Category::findOrFail($id),
                'categories' => $categories,
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
        return view('admin.category.edit',[
            'categoria' => Category::findOrFail($id)

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
        $categoria = Category::findOrFail($id);

        if($request->file('photo')){
            $photo = new Photo;
            $imageName = time().'.'.$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('categories'), $imageName);
            $photo->source = $imageName;
            $photo->type = "category";
            $photo->save();
            $categoria->photo_id = $photo->id;
        }

        $categoria->name = $request->name;
        $categoria->update();
        
        return redirect('/');

       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect('/admin/category');

    }
}
