<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Payment;

class PaymentController extends Controller
    {
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.payment.index',[
          'title' => 'Listado de medios de pago',
          'payment' => $payment,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.payment.create',[
          'payment' => new Payment
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
      'method' => 'required',

      ]);

      $payment = Payment::create($request->all());

      return redirect('admin/payment/add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $payment = Payment::find(id);
      return view('admin.payment.show', [
        'payment' => $payment,
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $payment = Payment::find(id);

      return view('admin.payment.edit',[
          'payment' => Payment::findOrFail($id)
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
      'method' => 'required',

      ]);

      $payment = Payment::find($id);
      $payment->update($request->all());
      return redirect('admin/payment/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $payment = Payment::findOrFail($id);

      $payment->delete();

      return redirect('admin/payment');
    }
}
