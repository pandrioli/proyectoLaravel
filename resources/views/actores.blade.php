@extends('base')

@section('content')
  <h1>Actores</h1>
  <h3>Buscar por nombre</h3>
  <form action="/actores/buscar" method="post">
    {{ csrf_field() }}
    <input type="text" name="nombre" value="">
    <input type="submit" name="buscar" value="Buscar">
  </form>
  <a href="/actores">Ver todos</a>
  <a href="/agregarActor">Agregar actor</a>
  <h3>Resultados</h3>
  <ul>
    @forelse ($listaActores as $actor)
      <li>
        <a href="/actores/{{$actor->id}}"><h3>{{$actor->getNombreCompleto()}}</h3></a>
        <form action="/actores/{{$actor->id}}" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE')}}
          <a href="/actores/{{$actor->id}}/editar">editar</a>
          <input type="submit" name="borrar" value="eliminar">
        </form>
      </li>
    @empty
      No hay resultados
    @endforelse
    <br>
  </ul>
@endsection
