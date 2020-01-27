<?php

namespace App\Http\Controllers;
use App\purchase;
use App\Payment;
 
use Illuminate\Http\Request;

class purchaseController extends Controller
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
      //return view('admin.purchases.create', [$]);
      return view('/customer/create', [
        'purchase' => New purchase,
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
        'shipping_cost' => 'required',
        'shipping_type' => 'required',
        'total' => 'required',
        'status_id' => 'required',
        'payment_id' => 'required',
        'cart_id' => 'required',
      ]);
      // invoco al modelo, le digo que voy a crear en la bese de datos un nuevo registro con todos los datos de ese array (all) los datos que indique el modelo.
      $purchase = purchase::create($request->all());

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
        return view('website.purchase.show', ['purchase' => purchase::findOrFail($purchase)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            //return view('website.purchase.edit', ['purchase' => purchase::findOrFail($purchase)]);
        $purchase = purchase::findOrFail($id);
        return view('admin.purchases.edit', [
          'purchase' => $purchase,
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
        'shipping_cost' => 'required',
        'shipping_type' => 'required',
        'total' => 'required',
        'status_id' => 'required',
        'payment_id' => 'required',
        'cart_id' => 'required',
      ]);

      $purchase = purchase::find($id);
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
      $purchase = purchase::findOrFail($purchase);
      $purchase->delete();
      return redirect('/purchases');
    }
}
