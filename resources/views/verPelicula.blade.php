@extends('base')

@section('content')
  <h1>{{$pelicula->title}}</h1>
  <ul>
    <li>{{$pelicula->genre->name}} - {{$pelicula->length}} min</li>
    <li>
      <h3>Actores</h3>
      <ul>
        @foreach ($pelicula->actors as $actor)
          <li>{{$actor->getNombreCompleto()}}</li>
        @endforeach
      </ul>
    </li>
  </ul>
@endsection
