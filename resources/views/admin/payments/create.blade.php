{{-- @extends('view') --}}


  <div class="container">
    <div class="row">
      <div class="col">
        <h1> Crear Medios de Pago</h1>
        @include('admin.payments.form', [
          'method' => 'post',
          'url' => '/admin/payments/add', //esta es mi ruta
        ]);


      </div>

    </div>

  </div>
