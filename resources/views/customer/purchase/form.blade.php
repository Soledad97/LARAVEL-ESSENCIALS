<form action="{{ url($url) }}" method="post">

  @csrf
  @method($method)

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
    
    <select name="cart_id">
        @foreach ($carts as $cart)
            <option value="{{$cart->id}}">
                {{$cart->session('cart')}}
            </option>
        @endforeach
    </select>




    <button type="submit">Enviar</button>

    
</form>
