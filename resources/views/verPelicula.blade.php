@extends('base')

@section('content')
  <pre>
    {{ print_r($pelicula->getAttributes()) }}
  </pre>
@endsection
