@extends('layouts.app')
@section('title', 'Nuestas Categorias')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"/>

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <h1>{{$title}}</h1>
      @foreach ($categories as $category)
        <div>
           <a href="/category/{{$category->id}}">
          {{$category->name}}
           </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
