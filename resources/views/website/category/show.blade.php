@extends('layouts.app')
@section('title', 'Nuestra Categoria '.$category->name)

@section('css')
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"/>

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <h1>{{$category->name}}</h1>
      @forelse ($category->products as $product)
      <div class="card" style="width: 18rem;">
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

            
            @if (Auth::user()->role_id == 0)
            <a href="/admin/category/{{$category->id}}/edit">
                Editar
            </a>
    
        <form action="/admin/category/{{$category->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-sm btn-outline-dark">Eliminar</button>
        </form>
    
    
            @endif
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
          <p>No tengo Productos en esta Categoria</p>
      @endforelse
    </div>
  </div>
</div>
@endsection
