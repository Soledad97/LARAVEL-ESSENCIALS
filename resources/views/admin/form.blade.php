<form action="{{ url($url) }}" method="post">
    @csrf 

    @method($method)

    <div class="form-group">
        <label>Nombre</label>
        <input 
            class="form-control"
            type="text" name="title" 
            value="{{ old('title', $product->title) }}">

        <p class="text-danger">{{ $errors->first('title') }}</p>
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input 
            class="form-control"
            type="number" name="price" 
            value="{{ old('price', $product->price) }}">
    </div>

    <div class="form-group">
        <label>Stock</label>
        <input 
            class="form-control"
            type="number" name="stock" 
            value="{{ old('stock', $product->stock) }}">
    </div>

    <div class="form-group">
        <label for="">Descripcion</label>
        <textarea class="form-control" name="description">{{ $product->description }}</textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>