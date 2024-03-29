
@extends('layouts.admin')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"/>


@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Editar producto</h1>

                @include('admin.products.form', [
                    'method' => 'patch',
                    'url' => '/admin/product/' . $product->id
                ])
            </div>
        </div>
    </div>
@endsection
