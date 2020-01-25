@extends('view')

@section('')

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>{{ $order->shipping_cost }}</h1>
        <p><b>Costo de envio: </b>{{ $order->shipping_cost}}</p>
        <p><b>Tipo de envio: </b>{{ $order->shipping_type}}</p>
        <p><b>Total: </b>{{ $order->total}}</p>
        @foreach($order->cart()->products as $product)
          <li>{{$product->name}}</li>
        @endforeach
        <a href="/order" class="btn btn-primary">Volver al listado</a>

      </div>

    </div>

  </div>


@endsection
