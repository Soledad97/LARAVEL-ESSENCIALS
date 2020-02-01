@extends('layouts.app')


@section('title')
     listado productos
@endsection


@section('content')
 
@if (isset($termino))
    <h1>Se busco producto con el termino {{$termino}}</h1>
@else
    <h1>Todos nuestro producto</h1>
@endif

<div class ="container">
    <div class= "row">
       <div class="col">


            @foreach ($productos as $product )

            <h1>{{$product->name}}</h1>

            <div>
                <a href="/products/{{ $product->id }}">

                </a>
            <img src="{{ url("image/".$product->photo) }}" alt="">
            
       
            @foreach ($productos as $producto )
                
            <div class="card" style="width: 18rem;">

                <img class="card-img-top" src="{{ url("image/".$producto->photos[0]->source) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$producto->name}}</h5>
                    <p class="card-text">{{$producto->description}}</p>
                <a href="/products/{{$producto->id}}" class="btn btn-primary">Ver</a>
                </div>
              </div>

              

            @endforeach
@endforeach

         </div>
     </div>
  </div>

@endsection
