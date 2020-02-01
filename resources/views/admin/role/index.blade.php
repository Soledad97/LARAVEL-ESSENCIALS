@extends('layouts.admin')
@section('title', "Roles")
@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>{{$title}}</h1>
        @foreach ($roles as $role)
          <div>
             <a href="/role/{{$role->id}}">
            {{$role->name}}
             </a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  @endsection
