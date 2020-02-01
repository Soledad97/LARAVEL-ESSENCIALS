@extends('layouts.app')
@section('name', $title)
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
