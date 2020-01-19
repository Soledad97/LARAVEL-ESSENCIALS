@extends('layouts.master')

@section('title')
    Essencials
@endsection

@section('content')
<br>
<br>

<div class="container">
  <div class="row">
    <div class="box-footer">
        <div class="pull-left">
            <a href="{{ route('product.index') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Volver al inicio</a>
        </div>
    </div>
  </div>
</div>
<br><br>

<div class="container">

                    <div class="col-md-10">

                      <div class="heading">
                        <h1>{{$producto->title}}</h1>
                      </div>

                        <p class="lead"> {{$producto->description}} </p>
                        <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Ver detalles del producto</a>
                        </p>


                        <div class="row" id="productMain">
                            <div class="col-sm-6">
                                <div id="mainImage">
                                    <img src="{{ URL::asset($producto->imgpath) }}" alt="producto" class="img-responsive">
                                </div>

                             

                            </div>
                            <div class="col-sm-6">
                                <div class="box">

                                    <form>
                                        <div class="sizes">

                                            <h3>disponibles</h3>

                                        
                                        </div>

                                        <p class="price">${{$producto->price}}</p>

                                        <p class="text-center">
                                            <a href="route('product.cart', ['id' => $product->id ])" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Agregar a carrito</a>
                                            </button>
                                        </p>

                                    </form>
                                </div>

                                <div class="row" id="thumbs">
                                    <div class="col-xs-4">
                                            <img src="{{URL::asset('img/face.cream.jpg')}}" alt="" class="img-responsive">

                                    </div>
                                    <div class="col-xs-4">
                                            <img src="{{URL::asset('img/producto3.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-xs-4">
                                            <img src="{{URL::asset('img/proucto2.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="box" id="details">
                            <p>
                                <h4>Detalles del producto</h4>
                                <p>{{$producto->description}}</p>
                                <h4>cuidado personal</h4>
                                <ul>
                                    <li>cremas</li>
                                    <li>tonicos</li>
                                </ul>
                                <h4>Sobre el producto</h4>
                               

                                <blockquote>
                                    <p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ducimus commodi cumque sit dolores porro saepe qui totam nihil asperiores..</em>
                                    </p>
                                </blockquote>
                        </div>

                        <div class="box social" id="product-social">
                            <h4>compartelo!</h4>
                            <p>
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>



                    </div>

</div>
@endsection



