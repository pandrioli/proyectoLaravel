@extends('base')

@section('content')
  <h1>Actores</h1>
  <h3>Buscar por nombre</h3>
  <form action="/actores/buscar" method="post">
    {{ csrf_field() }}
    <input type="text" name="nombre" value="">
    <input type="submit" name="buscar" value="Buscar">
  </form>
  <form action="/actores" method="get">
    {{ csrf_field() }}
    <input type="submit" name="todos" value="Ver todos">
  </form>
  <h3>Resultados</h3>
  <ul>
    @forelse ($listaActores as $actor)
      <li>{{$actor->getNombreCompleto()}}</li>
    @empty
      No hay resultados
    @endforelse
    <br>
  </ul>
@endsection
