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
       
            @foreach ($productos as $producto )
                
            <div class="card" style="width: 18rem;">
                @if (count($producto->photos) !== 0)
                <img class="card-img-top" src="{{ url("image/".$producto->photos[0]->source) }}" alt="Card image cap">
                    
                @else
                <img class="card-img-top" src="{{ url("image/dummy.png") }}" alt="Card image cap">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{$producto->name}}</h5>
                    <p class="card-text">{{$producto->description}}</p>
                <a href="/products/{{$producto->id}}" class="btn btn-primary">Ver</a>
                </div>
              </div>
            @endforeach

         </div>
     </div>
  </div>

@endsection
