<form action="{{ url($url) }}" method="post">
    @csrf

    @method($method)

    <div class="form-group">
        <label>Rol</label>
        <input
            class="form-control"
            type="text" name="role"
            value="{{ old('role', $user->role) }}">

        <p class="text-danger">{{ $errors->first('role') }}</p>
    </div>

    <div class="form-group">
        <label> Nombre </label>
        <input
            class="form-control"
            type="text" name="name"
            value="{{ old('name', $user->name)}}">
        <p class="text-danger">{{ $errors->first('name') }}</p>
    </div>

    <div class="form-group">
        <label> Email </label>
        <input
            class="form-control"
            type="text" name="city"
            value="{{ old('email', $user->email) }}">
        <p class="text-danger">{{ $errors->first('email') }}</p>
    </div>

    <div class="form-group">
        <label> Contraseña </label>
        <input
            class="form-control"
            type="text" name="password"
            value="{{ old('password', $user->password) }}">
        <p class="text-danger">{{ $errors->first('password') }}</p>
    </div>
    <div class="form-group">
        <label> Avatar </label>
        <input
            class="form-control"
            type="text" name="avatar_id"
            value="{{ old('avatar_id', $user->avatar_id) }}">
        <p class="text-danger">{{ $errors->first('avatar_id') }}</p>
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>
