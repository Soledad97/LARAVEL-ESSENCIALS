@extends('layouts.app')

@section('content')
{{$category}}
<ul>
    @foreach ($category->products as $item)
    <li>{{$item->name}}</li>
    @endforeach
</ul>

@endsection
