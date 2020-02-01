@extends('layouts.app')


@section('title','Producto '.$product->name)


@section('content')
    <h1>{{$product->name}}</h1>
    <p>{{$product->description}}</p>
    @if (count($product->photos) !== 0)
        @foreach ($product->photos as $photo )
            <img src="{{ url("image/".$photo->source) }}" alt="" >
        @endforeach    
    @else
        <img class="card-img-top" src="{{ url("image/dummy.png") }}" alt="Card image cap">
    @endif
@endsection