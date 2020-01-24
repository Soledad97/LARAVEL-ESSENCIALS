<form action="{{url($url)}}" method="post">
  @csrf
  @method($method)
  <div class="form-group">
    <label for="">  Costo de envio </label>
    <input
    class="form-Control"
    type="number" name="shipping_cost"
    value="{{old('shipping_cost', $order->shipping_cost)}}">
    <p class="text-danger">{{ $errors->first('shipping_cost')}}</p>
  </div>
  <div class="form-group">
    <label for="">  Tipo de envio </label>
    <input
    class="form-Control"
    type="text" name="shipping_type"
    value="{{old('shipping_type', $order->shipping_type)}}">
    <p class="text-danger">{{ $errors->first('shipping_type')}}</p>
  </div>
  <div class="form-group">
    <label for="">  Total </label>
    <input
    class="form-Control"
    type="number" name="total"
    value="{{old('total', $order->total)}}">
    <p class="text-danger">{{ $errors->first('total')}}</p>
  </div>


    <div class="form-group">
      <button class ="btn btn-primary">Guardar</button>

    </div>

  </form>
