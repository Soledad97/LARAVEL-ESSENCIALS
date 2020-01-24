@extends('view')

@section('')

  <div class="container">
    <div class="row">
      <div class="col">
        <h1> Editar Orden de Compra </h1>
        @include('admin.orders.form', [
          'method' => 'patch',
          'url' => '/orders' . $order->id 
        ])


      </div>

    </div>

  </div>


@endsection
