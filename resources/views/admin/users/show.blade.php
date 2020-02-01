@extends('layouts.admin')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>{{$user->name}}</h1>
        <p><b>role: </b> {{ $user->role }} </p>

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
             <tbody class="thead-light">

                @foreach ($users as $user)
                        <tr>
                        <td><a href="/admin/user/{{$user->id}}">{{$user->id}}</a></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role->role}}</td>
                        </tr>
                @endforeach
            </tbody>

        </table>

          
      </div>
    </div>
  </div>

@endsection
