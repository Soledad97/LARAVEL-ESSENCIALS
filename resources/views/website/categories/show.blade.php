//muetsra los productos que estan dentro de la categoria

<ul>
    @foreach ($category->products as $item)
    <li>{{$item->name}}</li>
    @endforeach
</ul>



