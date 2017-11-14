@extends('base')
@section('content')
      <h1>Peliculas</h1>
      @if (isset($genre))
        <h3>Genero: {{ $genre->name }}</h3>
      @endif
      <a class="button" href="/agregarPelicula">Agregar Pelicula</a>

      <ul>
      @forelse ($peliculas as $pelicula)
        <li>
          <h3><a href="/peliculas/{{$pelicula->id}}">{{$pelicula->title}}</a></h3>
          @if ($pelicula->genre)
            <h4>{{$pelicula->genre->name}}</h4>
          @endif
          <ul>
              @foreach ($pelicula->actors as $actor)
                <li>
                  {{$actor->getNombreCompleto()}}
                </li>
              @endforeach
          </ul>
        </li>
      @empty
        <h3>No se encontraron peliculas</h3>
      @endforelse
      <ul>
@endsection
