@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col">
              <h1> Nueva Orden </h1>
              @include('customer.purchase.form', [
                  'method' => 'post',
                  'url' => '/website/purchase/add'
              ])
          </div>
      </div>
  </div>
@endsection
