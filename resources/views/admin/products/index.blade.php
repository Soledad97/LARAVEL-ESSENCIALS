@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1> productos </h1>

                @include('admin.products.index', [
                    'method' => 'get',
                    'url' => '/products/' 
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