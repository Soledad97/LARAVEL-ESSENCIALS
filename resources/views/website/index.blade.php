@extends('website.products.website')

@section('title', $title)
<!--el nombre q aparece ne la pestaña-->



@section('content')

<div class ="container">
    <div class= "row">
       <div class="col">
            <h1>{{ $title }}</h1>
       
            @foreach ($products as $product )
                <div>  
                <a href="/products/ {{ $product->id }}">
                   {{$product->name}}
                </a>   
                </div>
            @endforeach
       


         </div>
     </div>
  </div>

@endsection





