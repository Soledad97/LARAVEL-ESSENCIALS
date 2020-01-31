@extends('layouts.admin')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col">
              <h1> Agregar Nuevo usuario </h1>

              @include('admin.users.form', [
                  'method' => 'post',
                  'url' => '/admin/users/add',
              ])
          </div>
      </div>
  </div>


@endsection
