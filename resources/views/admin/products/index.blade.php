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