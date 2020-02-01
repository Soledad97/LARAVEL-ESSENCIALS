@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Editar Categoria </h1>
            @include('admin.category.form', [
                'method' => 'patch',
                'url' => '/admin/category' . $categoria->id 
            ])
        </div>
    </div>
</div>
@endsection
