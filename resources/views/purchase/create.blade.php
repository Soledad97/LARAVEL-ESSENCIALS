@extends('layouts.app')

@section('content')
<form action="" method="post">
    <select name="address_id">
        @foreach ($addresses as $address)
            <option value="{{$address->id}}">
                {{$address->street}}
            </option>
        @endforeach
    </select>
    <select name="payment_id">
        @foreach ($methods as $method)
            <option value="{{$method->id}}">
                {{$method->method}}
            </option>
        @endforeach
    </select>
    <button type="submit">Enviar</button>
</form>
@endsection
