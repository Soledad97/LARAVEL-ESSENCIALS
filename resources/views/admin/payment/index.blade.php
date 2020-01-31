@extends('layouts.admin')
@section('name', $title)
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <h1>{{$title}}</h1>
      @foreach ($payments as $payment)
        <div>
           <a href="/address/{{$payment->id}}">
          {{$payment->method}}
           </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
