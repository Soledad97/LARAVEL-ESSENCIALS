@extends('view')

@section('')

  <div class="container">
    <div class="row">
      <div class="col">
        <h1> Crear Orden de Compra </h1>
        @include('admin.orders.form', [
          'method' => 'post',
          'url' => '/orders', //  '/orders/add'  esta es mi ruta 
        ])


      </div>

    </div>

  </div>


@endsection
