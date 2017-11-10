@extends('base')
@section('content')
      <h1>Peliculas</h1>
      <ul>
      @forelse ($peliculas as $pelicula)
        <li>{{$pelicula['title']}}</li>
      @empty
        <h3>No se encontro la pelicula</h3>
      @endforelse
      <ul>
@endsection
