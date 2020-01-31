<form action="{{url($url)}}" method="post">
  @csrf
  @method($method)
  <div class="form-group">
    <label> Roles </label>
    <input
    class="form-Control"
    type="text" name="name"
    value="{{old('name', $role->name)}}">

    <p class="text-danger">{{ $errors->first('name') }}</p>
    <div class="form-group">
      <button class ="btn btn-primary">Guardar</button>
    </div>
  </div>
</form>
