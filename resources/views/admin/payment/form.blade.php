<form action="{{url($url)}}" method="post">
  @csrf
  @method($method)
  <div class="form-group">
    <label> Medios de pago </label>
    <input
    class="form-Control"
    type="text" name="method"
    value="{{old('method', $payment->method)}}">

    <p class="text-danger">{{ $errors->first('method') }}</p>
    <div class="form-group">
      <button class ="btn btn-primary">Guardar</button>
    </div>
  </div>
</form>
