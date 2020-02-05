<form action="{{url($url)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="">  Nombre </label>
        <input
            class="form-Control"
            type="text" name="name"
            value="{{old('name', $categoria->name)}}">
        <p class="text-danger">{{ $errors->first('name')}}</p>
    </div>

    <div class="form-group">
        <label for=""> Foto </label>
        <input
            class="form-Control"
            type="file" name="photo">
        <p class="text-danger">{{ $errors->first('photo')}}</p>
    </div>

    <div class="form-group">
        <button class ="btn btn-primary">Guardar</button>
    </div>
  
    </form>