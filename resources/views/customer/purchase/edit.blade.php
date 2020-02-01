@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col">
              <h1> Editar Orden </h1>
              @include('customer.purchase.form', [
                  'method' => 'patch',
                  'url' => '/website/purchase'.$purchase->id
              ])
          </div>
      </div>
  </div>
@endsection
