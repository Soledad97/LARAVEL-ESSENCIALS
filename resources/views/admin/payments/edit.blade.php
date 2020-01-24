@section('')

  <div class="container">
    <div class="row">
      <div class="col">
        <h1> Editar Medios de Pago</h1>
        @include('admin.payments.form', [
          'method' => 'post',
          'url' => '/payments/'. $payment->id //   '/admin/payments/add' esta es mi ruta
        ])


      </div>

    </div>

  </div>


@endsection
