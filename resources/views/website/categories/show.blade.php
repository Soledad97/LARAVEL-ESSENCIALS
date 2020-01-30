<<<<<<< HEAD
@extends('layouts.website')

@section('listado categorias')
  @foreach
  ($categories as $category)

  @endforeach

@endsection
=======
//muetsra los productos que estan dentro de la categoria

<ul>
    @foreach ($category->products as $item)
    <li>{{$item->name}}</li>
    @endforeach
</ul>



>>>>>>> 06c072d3371b30172b8d3f6ea6d60da408a7bd29
