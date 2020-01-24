<form action="{{ url($url) }}" method="post">
  @csrf

  @method($method)

<div>
  <label>Nombre</label>
  <input
  type="text" name="title"
  value="{{ old('title', $product-> title) }}">

//var inputs = Array.from(document.forms[0].elements);
input.forEach(function(input){

}
</div>


</form>
