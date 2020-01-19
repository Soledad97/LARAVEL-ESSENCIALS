@extends('website.layouts.website')

@section('content')
   <div class="container">
       <div class="row">
            <div class="col">


            <h1>Editar producto</h1>

@include('admin.products.form', [
'method' => 'patch',
'url' => '/products/' . $product->id
])

     </div>
  </div>
</div>

@endsection




