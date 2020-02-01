@extends('layouts.admin')

@section('content')

  <div class="container">
      <div class="row">
          <div class="col">
              <h1> Crear Rol </h1>
              @include('admin.role.form', [
                  'method' => 'post',
                  'url' => '/admin/role/add',
              ])
          </div>
      </div>
  </div>

@endsection
