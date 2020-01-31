@extends('layouts.admin')

@section('content')

  <div class="container">
      <div class="row">
          <div class="col">
              <h1> Crear Role </h1>

              @include('admin.role.form', [
                  'method' => 'post',
                  'url' => '/admin/role',
              ])
          </div>
      </div>
  </div>


@endsection