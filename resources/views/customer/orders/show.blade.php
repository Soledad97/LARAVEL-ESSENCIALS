@extends('website.layouts.website')
@section('name')
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>{{$order->title}}</h1>
        <p><b>Costo de envio:</b> {{$order->shipping_cost}}</p>
        <p><b>Tipo de envio:</b> {{$order->shipping_type}}</p>
        <p><b>Total:</b> {{$order->total}}</p>
        <p><b>Status:</b> {{$order->status_id}}</p>
        <p><b>Forma de pago:</b> {{$order->payment_id}}</p>
        <p><b>Costo de envio:</b> {{$order->cart_id}}</p
          <a href="/orders" class="btn btn primary">Preparar la compra</a>
      </div>
    </div>
  </div>

@endsection
