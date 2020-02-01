@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col">
              <h1> Agregar Nueva direccion </h1>

              @include('customer.address.form', [
                  'method' => 'post',
                  'url' => '/website/address/add',
              ])
          </div>
      </div>
  </div>


@endsection
