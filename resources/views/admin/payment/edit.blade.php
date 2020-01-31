@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Editar Medio de Pago</h1>

                @include('admin.payment.form', [
                    'method' => 'patch',
                    'url' => '/admin/payment' . $payment->id
                ])
            </div>
        </div>
    </div>
@endsection
