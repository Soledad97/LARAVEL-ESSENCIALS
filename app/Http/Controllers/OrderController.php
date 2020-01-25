<?php

namespace App\Http\Controllers;
use App\Order;
use App\Payment;
 
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('website.orders.index', ['orders' => order::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //return view('admin.orders.create', [$]);
      return view('/customer/create', [
        'order' => New Order,
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
      $order = Order::create($request->all());

      return redirect('/order/' . $order->id);

      // return redirect()->back();  si quiero volver al formulario para seguir cargando productos.

      // return redirect('/orders');   si quiero ir al listado de las ordenes creadas.
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($order)
    {
        return view('website.order.show', ['order' => Order::findOrFail($order)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            //return view('website.order.edit', ['order' => Order::findOrFail($order)]);
        $order = Order::findOrFail($id);
        return view('admin.orders.edit', [
          'order' => $order,
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

      $order = Order::find($id);
      $order->update($request->all());
      return redirect('/orders/' . $order->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($order)
    {
      $order = Order::findOrFail($order);
      $order->delete();
      return redirect('/orders');
    }
}
