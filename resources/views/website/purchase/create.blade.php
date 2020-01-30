@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col">
              <h1> Nueva Orden </h1>
              @include('website.purchase.form', [
                  'method' => 'post',
                  'url' => '/customer/purchase'
              ])
          </div>
      </div>
  </div>
@endsection
