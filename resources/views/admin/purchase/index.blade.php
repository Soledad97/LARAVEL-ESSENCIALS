@extends('layouts.admin')
@section('name', $title)
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <h1>{{$title}}</h1>
      @foreach ($purchases as $purchase)
        <div>
           <a href="/purchase/{{$purchase->id}}">
          {{$purchase->total}}
           </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
