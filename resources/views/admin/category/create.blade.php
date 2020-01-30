@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Nueva Categoria </h1>
            @include('admin.category.form', [
                'method' => 'post',
                'url' => '/admin/category'
            ])
        </div>
    </div>
</div>
@endsection
