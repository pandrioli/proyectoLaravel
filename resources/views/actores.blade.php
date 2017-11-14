@extends('base')

@section('content')
  <h1>Actores</h1>
  <form action="/actores/buscar" method="post">
    {{ csrf_field() }}
    <input type="text" name="nombre" value=""><br>
    <input type="submit" class="button" name="buscar" value="Buscar">
    <a href="/actores" class="button">Ver todos</a>
    <a href="/agregarActor" class="button">Agregar actor</a>
  </form>
  <h3>Resultados</h3>
  <ul>
    @forelse ($listaActores as $actor)
      <li>
        <form action="/actores/{{$actor->id}}" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE')}}
          <a href="/actores/{{$actor->id}}"><h3>{{$actor->getNombreCompleto()}}</h3></a>
          <a class="button" href="/actores/{{$actor->id}}/editar">editar</a>
          <input type="submit" class="button" name="borrar" value="eliminar">
        </form>
      </li>
    @empty
      No hay resultados
    @endforelse
    <br>
  </ul>
@endsection
