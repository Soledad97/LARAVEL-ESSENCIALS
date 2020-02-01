<form action="{{ url($url) }}" method="post">
    @csrf
    @method($method)

    <div class="form-group">
        <label>Pais</label>
        <input
            class="form-control"
            type="text" name="Country"
            value="{{ old('Country', $address->Country) }}">

        <p class="text-danger">{{ $errors->first('Country') }}</p>
    </div>

    <div class="form-group">
        <label>Provincia</label>
        <input
            class="form-control"
            type="text" name="State"
            value="{{ old('State', $address->State)}}">
        <p class="text-danger">{{ $errors->first('State') }}</p>
    </div>

    <div class="form-group">
        <label>Ciudad</label>
        <input
            class="form-control"
            type="text" name="City"
            value="{{ old('City', $address->City) }}">
        <p class="text-danger">{{ $errors->first('City') }}</p>
    </div>

    <div class="form-group">
        <label>Calle</label>
        <input
            class="form-control"
            type="text" name="Street"
            value="{{ old('Street', $address->Street) }}">
        <p class="text-danger">{{ $errors->first('Street') }}</p>
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>
