@extends('layout')



@section('content')   




<h1>listado de productos</h1>
@foreach($products as $product)
     <h3>{{ $products ->name}}</h3>
     <img src ="{{ $product ->image }}" width ="200">
@endforeach





@endSection