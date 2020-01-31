@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <h1>{{$title}}</h1>
      @foreach ($users as $user)
        <div>
           <a href="/user/{{$user->id}}">
          {{$user->name}}
           </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
