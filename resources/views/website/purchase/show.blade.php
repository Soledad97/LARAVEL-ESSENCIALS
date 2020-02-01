@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>{{$purchase->cart_id}}</h1>
        <p><b>total: </b> {{ $purchase->total }} </p>

      </div>

    </div>

  </div>


@endsection
