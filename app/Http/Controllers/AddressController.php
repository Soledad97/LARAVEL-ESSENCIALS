<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use Auth;
class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.address.index',[
            'title' => 'Listado de direcciones',
            'address' => $address,
          ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('customer.address.create',[
          'address' => new Address
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
      'Country' => 'required',
      'State' => 'required',
      'City' => 'required',
      'Street' => 'required',
      ]);

      $address = Address::create($request->all());
      Auth::user()->address()->attach($address);
      return redirect('customer/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = Address::find(id);
        return view('admin.address.show', [
          'address' => $address,
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
      return view('customer.address.edit',[
          'address' => Address::findOrFail($id)
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
        'Country' => 'required',
        'State' => 'required',
        'City' => 'required',
        'Street' => 'required',

      ]);

      $address = Address::find($id);
      $address->update($request->all());
      return redirect('/customer/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $address = Address::findOrFail($id);

      $address->delete();

      return redirect('/customer/address');
    }
}
