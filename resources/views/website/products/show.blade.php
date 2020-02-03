@extends('layouts.app')


@section('title','Producto '.$product->name)


@section('css')
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"/>
@endsection

@section('content')


<div class="card">
    <h1>{{$product->name}}</h1>
    <p>{{$product->description}}</p>
    @if (count($product->photos) !== 0)
        @foreach ($product->photos as $photo )
            <img src="{{ url("image/".$photo->source) }}" alt="" >
        @endforeach    
    @else
        <img class="card-img-top" src="{{ url("image/default.png") }}" alt="Card image cap">
    @endif

</div>    
@endsection