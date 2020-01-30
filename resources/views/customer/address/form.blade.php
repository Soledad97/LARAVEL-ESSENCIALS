<form action="{{ url($url) }}" method="post">
    @csrf

    @method($method)

    <div class="form-group">
        <label>Pais</label>
        <input
            class="form-control"
            type="text" name="country"
            value="{{ old('country', $product->country) }}">

        <p class="text-danger">{{ $errors->first('country') }}</p>
    </div>

    <div class="form-group">
        <label>Provincia</label>
        <input
            class="form-control"
            type="text" name="state"
            value="{{ old('state', $address->state)}}">
        <p class="text-danger">{{ $errors->first('country') }}</p>
    </div>

    <div class="form-group">
        <label>Ciudad</label>
        <input
            class="form-control"
            type="text" name="city"
            value="{{ old('city', $address->city) }}">
        <p class="text-danger">{{ $errors->first('country') }}</p>
    </div>

    <div class="form-group">
        <label>Calle</label>
        <input
            class="form-control"
            type="text" name="street"
            value="{{ old('street', $address->street) }}">
        <p class="text-danger">{{ $errors->first('country') }}</p>
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>
