@extends('layouts.admin')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>{{$user->name}}</h1>
        <p><b>role: </b> {{ $user->role }} </p>
      </div>
    </div>
  </div>

@endsection
