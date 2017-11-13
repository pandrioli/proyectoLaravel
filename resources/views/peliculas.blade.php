@extends('base')
@section('content')
      <h1>Peliculas</h1>

      <a href="/agregarPelicula">Agregar Pelicula</a>
      
      <ul>
      @forelse ($peliculas as $pelicula)
        <li><a href="peliculas/{{$pelicula->id}}">{{$pelicula->title}}</a></li>
      @empty
        <h3>No se encontro la pelicula</h3>
      @endforelse
      <ul>
@endsection
