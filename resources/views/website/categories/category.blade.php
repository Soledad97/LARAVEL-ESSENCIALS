@extends('layouts.master')

@section('title')
    Essencials
@endsection

@section('content')
<br>
<br>

  @if(Session::has('success'))
  <section class="bar no-mb color-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Perfecto!</h1>

                        <p class="lead">{{ Session::get('success') }}</p>

                    </div>
                </div>
            </div>
  </section>
  @endif

  <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Categories</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('product.index') }}">Inicio</a>
                            </li>
                            <li>{{ $category }}</li>
                        </ul>

                    </div>
                </div>
            </div>
    </div>

<div class="container">
        <p class="text-muted lead text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nulla quos distinctio commodi soluta aliquam.</p>
    @foreach($producto->chunk(4) as $proChunk)

      <div class="row products">

          @foreach($proChunk as $product)

            <div class="col-md-3 col-sm-4">
                <div class="product">
                    <div class="image">
                        <a href="shop-detail.html">
                            <img src="{{$product->image}}" alt="" class="img-responsive image1">
                        </a>
                    </div>
                    <!-- /.image -->
                    <div class="text">
                        <h3><a href="shop-detail.html">{{$product->description}}</a></h3>
                        <p class="price">${{$product->price}}</p>
                        <a href="shop-detail.html" class="btn btn-default">Ver más</a>
                        <a href="{{ route('product.carrito', ['id' => $product->id ]) }}" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Agregar producto</a>
                    </div>
                    <!-- /.text -->



                </div>
                <!-- /.product -->
              </div>
          @endforeach

      </div> <!-- Fin ROW-->

    @endforeach

</div> <!--Fin container-->

