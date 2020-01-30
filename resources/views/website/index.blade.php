@extends('layouts.app')


@section('title')
     listado productos
     
@endsection



@section('content')
    


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img class="d-block w-100" src="..." alt="First slide">
       </div>
       <div class="carousel-item">
         <img class="d-block w-100" src="..." alt="Second slide">
       </div>
       <div class="carousel-item">
         <img class="d-block w-100" src="..." alt="Third slide">
       </div>
     </div>
     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>




 
@foreach ($products as $product )
                
<div class="card" style="width: 18rem;">

    <img class="card-img-top" src="{{ url("image/".$product->photos[0]->source) }}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->description}}</p>
    <a href="/product/{{$product->id}}" class="btn btn-primary">Ver</a>
    </div>
  </div>
@endforeach



@endsection