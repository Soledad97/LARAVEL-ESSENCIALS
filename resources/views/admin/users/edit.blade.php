@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Editar usuario</h1>

                @include('admin.users.form', [
                    'method' => 'patch',
                    'url' => '/admin/users/' . $users->id
                ])
            </div>
        </div>
    </div>
@endsection
