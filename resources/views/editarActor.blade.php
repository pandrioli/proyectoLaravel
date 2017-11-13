@extends('base')

@section('content')
  <h1>Datos del actor</h1>
  <form method="post">
    {{ csrf_field() }}
    @if ($actor->id !== null)
      <input name="_method" type="hidden" value="PUT">
    @endif
    Nombre <input type="text" name="first_name" value="{{old('first_name', $actor->first_name)}}"><br>
    Apellido <input type="text" name="last_name" value="{{old('last_name', $actor->last_name)}}"><br>
    <input type="submit" name="guardar" value="Guardar">
  </form>
  <ul>
    @forelse($errors->All() as $error)
    <li>{{ $error }}</li>
    @empty
    @endforelse
  </ul>

@endsection
