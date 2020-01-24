
<form action="{{url($url)}}" method="post">
  @csrf
  @method($method)
  <div class="form-group">
    <label for=""> Medios de pago </label>
    <input
    class="form-Control"
    type="text" name="method"
    value="{{old('method', $payment->method)}}">
    <div class="form-group">
      <button class ="btn btn-primary">Guardar</button>

    </div>

  </div>

</form>
