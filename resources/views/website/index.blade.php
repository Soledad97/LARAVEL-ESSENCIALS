@extends('layouts.app')


@section('title',)
     Essencials
     
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"/>

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
      <img class="d-block w-100" src="/image/slider/publicidad5.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/slider/violeta.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/slider/publicidad7.jpg" alt="Third slide">
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





   <div class="jumbotron jumbotron-fluid bg-success text-white text-center mb-0 ">
    <div class="container">
        <h1 class="display-4">Descubrí</h1>
        <div class="row">
            <div class="col-12 col-md-4">
                <a href="?action=categoria&categoria=cremas">
                    <img src="/image/lAcomunidad.png" alt="" class="rounded-circle img-fluid">
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="?action=categoria&categoria=jabones">
                    <img src="/image/laentrega.png" alt="" class="rounded-circle img-fluid">
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="?action=categoria&categoria=aceites">
                    <img src="/image/elmediambiente.png" alt="" class="rounded-circle img-fluid">
                </a>
            </div>
        </div>
    </div>
</div>


<div class="jumbotron jumbotron-fluid bg-light text-success text-center ">
    <div class="container">
        <h1 class="display-4">Nosotros</h1>
        <div class="row">
            <div class="col-12 col-md-6 mx-md-auto text-center">
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Accusamus natus quae velit reprehenderit autem
                    rerum illum earum eius quisquam provident.
                </p>
            </div>
        </div>
    </div>
</div>


@if (count($products) > 0)
<div class="container d-flex flex-wrap justify-content-between">

  @forelse ($products as $product)
  <div class="card mb-2" style="width: 18rem;">
    @if (count($product->photos) !== 0)
    <img class="card-img-top" src="{{ url("image/".$product->photos[0]->source) }}" alt="Card image cap">
    
    @else
    <img class="card-img-top" src="{{ url("image/default.png") }}" alt="Card image cap">
    @endif
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->description}}</p>
        <a href="/products/{{$product->id}}" class="btn btn-primary">Ver</a>
        
        
        @auth
            <form action="customer/cart" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <input type="hidden" name="product_id" value="{{$product->id}}">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-sm btn-outline-success">Agregar al carrito</button>
            </form>
            @endauth


          </div>
        </div>
        
        @empty
        
        Vuelve mas tarde
        
        @endforelse
    </div>
        
@endif

@endsection