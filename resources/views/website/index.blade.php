@extends('Layout')
@section('content')

<div class="card-group">
  @foreach($products as $product)
    <div class="card">
      @if(isset($product->image))

        <img src="{{asset('images/product/'.$product->image)}}" class="card-img-top" alt="...">
      
      @else
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
      
      @endif
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
   @endforeach   
</div>



@endsection