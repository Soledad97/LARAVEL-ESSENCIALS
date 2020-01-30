<<<<<<< HEAD:resources/views/website/purchase/show.blade.php
@extends('layouts.app')

@section('content')

@endsection
=======
@extends('layouts.admin.products')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $title }}</h1>

                @include('admin.product.index', [
                    'method' => 'get',
                    'url' => '/products/' . $product->id
                ])

                @foreach ($products as $product)
                    <div>
                        <a href="/products/{{ $product->id }}">
                            {{ $product->name }}
                        </a>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
>>>>>>> 06c072d3371b30172b8d3f6ea6d60da408a7bd29:resources/views/admin/products/index.blade.php
