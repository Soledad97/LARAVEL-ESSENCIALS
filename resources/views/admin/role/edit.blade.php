@extends('layouts.admin')

@section('content')

      <div class="container">
          <div class="row">
              <div class="col">
                  <h1>Editar Rol</h1>
                  @include('admin.role.form', [
                      'method' => 'patch',
                      'url' => '/admin/role/' . $role->id
                  ])
              </div>
          </div>
      </div>

@endsection
