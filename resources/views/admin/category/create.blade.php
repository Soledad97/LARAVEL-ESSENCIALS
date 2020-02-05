@extends('layouts.admin')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"/>

  

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Nueva Categoria </h1>
            @include('admin.category.form', [
                'method' => 'post',
                'url' => '/admin/category/add'
            ])
        </div>
    </div>
</div>
@endsection
