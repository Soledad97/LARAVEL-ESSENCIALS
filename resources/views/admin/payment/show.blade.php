@extends('layouts.admin')

@section('content')


  <h1>Medios de Pago</h1>

  <ul>
      @foreach ($metodos as $payment)
        <div>
          <a href="href="/admin/payment/{{$payment->id}}">
          </a>

        </div>
          <li class="d-flex justify-content-around">
            {{$payment->method}}

          </li>
      @endforeach
  </ul>

@endsection
