@extends('layouts.app')


@section('title')
     listado productos
<<<<<<< HEAD

=======
>>>>>>> 06c072d3371b30172b8d3f6ea6d60da408a7bd29
@endsection


@section('content')
<<<<<<< HEAD
=======
 
//MUESTRA TODOS LOS PRODUCTOS

>>>>>>> 06c072d3371b30172b8d3f6ea6d60da408a7bd29

<div class ="container">
    <div class= "row">
       <div class="col">
<<<<<<< HEAD


            @foreach ($products as $product )

            <h1>{{$product->name}}</h1>

            <div>
                <a href="/products/{{ $product->id }}">

                </a>
            <img src="{{ url("image/".$product->photo) }}" alt="">
=======
            
       
            @foreach ($productos as $producto )
                
            <div class="card" style="width: 18rem;">

                <img class="card-img-top" src="{{ url("image/".$producto->photos[0]->source) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$producto->name}}</h5>
                    <p class="card-text">{{$producto->description}}</p>
                <a href="/product/{{$producto->id}}" class="btn btn-primary">Ver</a>
>>>>>>> 06c072d3371b30172b8d3f6ea6d60da408a7bd29
                </div>
              </div>
            @endforeach
<<<<<<< HEAD


=======
    
>>>>>>> 06c072d3371b30172b8d3f6ea6d60da408a7bd29

         </div>
     </div>
  </div>

@endsection
