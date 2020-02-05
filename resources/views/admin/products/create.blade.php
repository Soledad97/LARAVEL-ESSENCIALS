@extends('layouts.admin')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"/>


@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1> Nuevo producto</h1>

                @include('admin.products.form', [
                    'method' => 'post',
                    'url' => '/admin/products/add',
                ])
            </div>
        </div>
    </div>
@endsection
