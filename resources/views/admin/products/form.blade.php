<form action= "{{url($url)}}" method="patch">


@csrf

@method($method)

<div class="form-group">  
    <label>Nombre</label>
    <input
          class="form-control"
          type = "text" name="name"
          value="{{old('name',$product->name)}}">

          <p class="text-danger">{{$errors->first('title')}}</p>
          
       </div>

<div class="form-group">  
    <label>Precio</label>
    <input
          class="form-control"
          type = "number" name="price"
          value="{{old('price',$product->price) }}">
       </div>

<div class="form-group">  
    <label>Stock</label>
    <input
          class="form-control"
          type = "number" name="stock"
          value="{{old('stock',$product->stock)}}">
       </div>

<div class="form-group">
  <label for="">DES</label>
<textarea class="form-control"name="description">{{ $product->description}}</textarea>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>

</form>