<?php

namespace App\Http\Controllers;
use App\Purchase;
use App\Payment;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('website.purchases.index', ['purchases' => purchase::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchase.create', [
        'purchase' => New Purchase,
        'cart' => session('cart'),
        'addresses'=> Auth::user()->address,
        'method' => Payment::all
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response
     */

    public function store(Request $request) //entra la peticion entran los datos del formulario
    {
      // entra el validador y se le indica como debe validar lo que ingresa.
      // el validate automaticamente, si no lo hace, no sigue el proceso, sino que redirige a la pagina de donde vino, que normalmente es la pagina del formulario.
      $this->validate($request, [
        'cart_id' => 'required',
        'total' => 'required',
        'address_id' => 'required',
        'status_id' => 'required'

      ]);
      // invoco al modelo, le digo que voy a crear en la bese de datos un nuevo registro con todos los datos de ese array (all) los datos que indique el modelo.
      $purchase = Purchase::create($request->all());

      return redirect('/purchase/' . $purchase->id);

      // return redirect()->back();  si quiero volver al formulario para seguir cargando productos.

      // return redirect('/purchases');   si quiero ir al listado de las ordenes creadas.
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($purchase)
    {
        return view('website.purchase.show', ['purchase' => Order::findOrFail($purchase)]);
    }

    /**()
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
      return view('purchase.edit', [
      'purchase' => Purchase::findOrFail(id),
      'cart' => session('cart'),
      'addresses'=> Auth::user()->address,
      'method' => Payment::all
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
      $this->validate($request, [
        'cart_id' => 'required',
        'total' => 'required',
        'payment_id' => 'required',
        'status_id' => 'required'
      ]);

      $purchase = Purchase::find($id);
      $purchase->update($request->all());
      return redirect('/purchases/' . $purchase->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($purchase)
    {
      //$Purchase = Purchase::findOrFail($purchase);
      //$purchase->delete();
      //return redirect('/purchases');
    }
}
