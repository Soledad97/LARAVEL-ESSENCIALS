@extends('layouts.admin')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>{{$payment->method}}</h1>
        <p><b>method: </b> {{ $payment->method }} </p>

        


      </div>
    </div>
  </div>
@endsection
