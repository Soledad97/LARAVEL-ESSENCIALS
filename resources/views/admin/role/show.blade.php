@extends('layouts.admin')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col">
          <h1>{{$role->name}}</h1>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @if (count($role->users) !== 0)
                  @forelse ($role->users as $user)
                  <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>--</td>
                  </tr>
                  @empty
                  <tr>
                    <th scope="row">1</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                  </tr>                 
                  @endforelse
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>

@endsection
