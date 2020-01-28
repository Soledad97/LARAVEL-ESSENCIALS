<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Photo;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.index',['categorias' => Category::all()]);
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

        if($request->file('icon')){
            $icono = new Photo;
            $imageName = time().'.'.$request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(public_path('categories'), $imageName);
            $icono->source = $imageName;
            $icono->type = "category";
            $icono->save();
            $categoria->icon_id = $icono->id;
        }

        $categoria->name = $request->name;
        $categoria->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        if($request->file('icon')){
            $icono = new Photo;
            $imageName = time().'.'.$request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(public_path('categories'), $imageName);
            $icono->source = $imageName;
            $icono->type = "category";
            $icono->save();
            $categoria->icon_id = $icono->id;
        }

        $categoria->name = $request->name;
        $categoria->save();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($category);

        $category->delete();

        return redirect('/categories');
        
        //dd(Category::findOrFail($id));
    }
}
