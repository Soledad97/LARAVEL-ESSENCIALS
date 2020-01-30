@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col">
              <h1> Edit Orden </h1>
              @include('website.purchase.form', [
                  'method' => 'patch',
                  'url' => '/customer/purchase'.$purchase->id
              ])
          </div>
      </div>
  </div>
@endsection
