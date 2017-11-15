@extends('base')

@section('content')
  <pre>{{ print_r($actor->getAttributes()) }}</pre>
  {{ $this->links() }}
@endsection
