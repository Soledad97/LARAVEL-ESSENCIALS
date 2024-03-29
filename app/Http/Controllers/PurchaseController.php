<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Purchase;
use App\Payment;
use App\Product;
use App\Category;
use App\Address;
use App\Cart;
use App\User;
use Auth;


class PurchaseController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $purchases = Purchase::all();   
      return view('admin.purchase.index',[
          'title' => 'Listado de ordenes',
          'purchases' => $purchases,
        ]);

        //return view('admin.purchase.index',['compras' => Purchase::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.purchase.create',[
            'purchase' => new Purchase,
            'cart' => session('cart'),
            'addresses' => Auth::user()->addresses,
            'methods' => Payment::all()
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
      $this->validate ($request,
      [
      'purchase' => 'required',
      'cart' => 'required',
      'address' => 'required',
      'method' => 'requiered',
      ]);

      $purchase = Purchase::create($request->all());
      return redirect('/customer/purchase/' . $purchase->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $purchase = Purchase::find($id);
      return view('website.purchase.show', [
        'purchase' => $purchase,
      ]);

        //return view('website.purchase.show', ['purchase' => Purchase::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('customer.purchase.edit',[
            'purchase' => Purchase::findOrFail($id),
            'cart' => session('cart'),
            'addresses' => Auth::user()->addresses,
            'methods' => Payment::all
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
      'cart' => 'required',
      'address' => 'required',
      'method' => 'required',

      ]);


      $purchase = Purchase::find($id);
      $purchase->update($request->all());
      return redirect('/purchase/' . $purchase->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
