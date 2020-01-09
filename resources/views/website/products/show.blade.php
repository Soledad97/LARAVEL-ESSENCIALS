{{ $product }}

<form class="" action="/cart/add" method="post">
  @csrf
  <input type="hidden" name="product_id" value="{{ $product->id}}">
  <button >Agregar al carrito</button>
</form>
