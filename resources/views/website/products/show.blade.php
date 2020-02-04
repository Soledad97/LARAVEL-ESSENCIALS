@extends('layouts.app')


@section('title','Producto '.$product->name)


@section('css')
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"/>
@endsection

@section('content')


<div class="card">
    <h1>{{$product->name}}</h1>
    <p>{{$product->description}}</p>
    @if (count($product->photos) !== 0)
        @foreach ($product->photos as $photo )
            <img src="{{ url("image/".$photo->source) }}" alt="" >
        @endforeach    
    @else
        <img class="card-img-top" src="{{ url("image/default.png") }}" alt="Card image cap">
    @endif

    @auth
                            
        @if (Auth::user()->role_id == 0)
        <a href="/admin/product/{{$product->id}}/edit">
            EDITAR
        </a>

    <form action="/admin/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-sm btn-outline-dark">Eliminar</button>
    </form>


        @endif

        @if (Auth::user()->role_id == 1)
        
        <form action="customer/cart" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <input type="hidden" name="qty" value="1">
            <button type="submit" class="btn btn-sm btn-outline-success">Agregar</button>
          </form>


        @endif
            
    @endauth




</div>    
@endsection