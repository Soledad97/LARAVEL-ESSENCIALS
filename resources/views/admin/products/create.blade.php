@extends('layouts.admin')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Crear producto</h1>

                @include('admin.products.form', [
                    'method' => 'post',
                    'url' => '/admin/product/add',
                ])
            </div>
        </div>
    </div>
@endsection
