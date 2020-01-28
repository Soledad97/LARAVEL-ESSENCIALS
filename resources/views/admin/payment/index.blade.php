@extends('layouts.admin')

@section('content')


  <h1>Listado de Medios de Pago</h1>

  <ul>
      @foreach ($payments as $payment)
          <li class="d-flex justify-content-around">
              {{$payment->method}}
              <a
                class="btn btn-sm btn-outline-warning"
               href="payment/{{$payment->id}}/edit">
                  Editar
              </a>
              <form action="payment/{{$payment->id}}" method="post">
                  @method('DELETE')
                  @csrf
                  <input type="hidden" name="id" value="{{$payment->id}}">
                  <button type="submit" class="btn btn-outline-danger"> Eliminar</button>
              </form>
          </li>
      @endforeach
  </ul>

@endsection
