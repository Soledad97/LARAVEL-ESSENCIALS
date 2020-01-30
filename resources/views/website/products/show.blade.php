//MUESTRA EL DETALLE DE UN PRODUCTO//

<h1>{{$product->name}}</h1>
<p>{{$product->description}}</p>
@foreach ($product->photos as $photo )
    <img src="{{ url("image/".$photo->source) }}" alt="" >
@endforeach