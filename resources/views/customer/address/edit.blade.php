@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Editar direccion</h1>

                @include('customer.address.form', [
                    'method' => 'patch',
                    'url' => '/website/address/' . $address->id
                ])
            </div>
        </div>
    </div>
@endsection
