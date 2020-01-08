<form action="{{ url($url) }}" method="post">
  @csrf

  @method($method)

<div>
  <label>Nombre</label>
  <input
  type="text" name="title"
  value="{{ old('title', $product-> title) }}">
</div>

</form>
