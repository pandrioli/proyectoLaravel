@extends('base')

@section('content')
  <h1>Agregar pelicula</h1>
  <form method="post">
    {{ csrf_field() }}
    <input type="text" name="nombre" value="" placeholder="Nombre de la pelicula">
    <input type="submit" name="agregar" value="Agregar">
  </form>
@endsection
