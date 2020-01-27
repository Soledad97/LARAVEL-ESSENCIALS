@extends('layouts.admin')

@section('content')

<h1>Listado de Categorias</h1>

<ul>
    @foreach ($categorias as $category)
        <li class="d-flex justify-content-around">
            {{$category->name}}
            <a
              class="btn btn-sm btn-outline-warning"   
             href="category/{{$category->id}}/edit">
                Editar
            </a>
            <form action="category/{{$category->id}}" method="post">
                @method('DELETE')
                @csrf
                <input type="hidden" name="id" value="{{$category->id}}">
                <button type="submit" class="btn btn-outline-danger"> Eliminar</button>
            </form>
        </li>
    @endforeach
</ul>

@endsection