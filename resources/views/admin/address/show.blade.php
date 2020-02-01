@extends('layouts.admin')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>{{$address->street}}</h1>
        <p><b>city: </b> {{ $address->city }} </p>


        

      </div>
    </div>
  </div>

@endsection
