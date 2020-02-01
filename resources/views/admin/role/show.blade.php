@extends('layouts.admin')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col">
          <h1>{{$role->name}}</h1>
          <p><b>name: </b> {{ $address->name }} </p>
        </div>
      </div>
    </div>

@endsection
