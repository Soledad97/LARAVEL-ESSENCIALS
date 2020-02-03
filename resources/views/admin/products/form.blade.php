<form action="{{ url($url) }}" method="post">
    @csrf 

    @method($method)

    <div class="form-group">
        <label>Nombre</label>
        <input 
            class="form-control"
            type="text" name="name" 
            value="{{ old('name', $product->title) }}">

        <p class="text-danger">{{ $errors->first('name') }}</p>
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

    <select name="categories[]" class="custom-select" multiple>
        @forelse ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @empty
            <option value="">No hay categorias</option>
        @endforelse
    
    </select>

    <div class="form-group">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>