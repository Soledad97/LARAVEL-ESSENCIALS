@extends('layouts.admin')

@section('content')


    <h1>Lista de Roles</h1>

    <ul>
        @foreach ($roles as $role)
            <li class="d-flex justify-content-around">
                {{$role->name}}
                <a
                  class="btn btn-sm btn-outline-warning"
                 href="role/{{$role->id}}/edit">
                    Editar
                </a>
                <form action="role/{{$role->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="{{$role->id}}">
                    <button type="submit" class="btn btn-outline-danger"> Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

  @endsection
