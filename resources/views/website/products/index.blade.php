@extends('layouts')


@section('title')
     listado productos
     
@endsection


@section('content')
 
<div class ="container">
    <div class= "row">
       <div class="col">
            
       
            @foreach ($products as $product )
                
            <h1>{{$product->name}}</h1>

            <div>  
                <a href="/products/{{ $product->id }}">
                
                </a> 
            <img src="{{ url($product->image) }}" alt="">  
                </div>
            @endforeach
       


         </div>
     </div>
  </div>

@endsection