@extends('base')

@section('content')
  <pre>{{ print_r($actor->getAttributes()) }}</pre>
@endsection
