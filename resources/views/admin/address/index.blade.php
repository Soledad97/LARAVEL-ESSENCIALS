@extends('layouts.admin')
@section('name', $title)
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <h1>{{$title}}</h1>
      @foreach ($addresses as $address)
        <div>
           <a href="/address/{{$address->id}}">
          {{$address->street}}
           </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
