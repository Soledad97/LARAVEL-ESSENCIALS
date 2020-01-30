@extends('layouts.app')


@section('title')
     listado productos
@endsection


@section('content')
 
//MUESTRA TODOS LOS PRODUCTOS


<div class ="container">
    <div class= "row">
       <div class="col">


            @foreach ($products as $product )

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
                <a href="/product/{{$producto->id}}" class="btn btn-primary">Ver</a>
                </div>
              </div>

              

            @endforeach


         </div>
     </div>
  </div>

@endsection
