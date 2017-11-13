@extends('base')
@section('content')
      <h1>Peliculas</h1>
      @if (isset($genre))
        <h3>Genero: {{ $genre->name }}</h3>
      @endif
      <a href="/agregarPelicula">Agregar Pelicula</a>

      <ul>
      @forelse ($peliculas as $pelicula)
        <li>
          <h3><a href="/peliculas/{{$pelicula->id}}">{{$pelicula->title}}</a></h3>
          @if ($pelicula->genre)
            {{$pelicula->genre->name}}
          @endif
        </li>
      @empty
        <h3>No se encontraron peliculas</h3>
      @endforelse
      <ul>
@endsection
