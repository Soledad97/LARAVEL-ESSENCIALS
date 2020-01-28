@extends('layouts.admin')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col">
              <h1>Crear Medio de Pago</h1>

              @include('admin.payment.form', [
                  'method' => 'post',
                  'url' => '/admin/payment',
              ])
          </div>
      </div>
  </div>


@endsection
