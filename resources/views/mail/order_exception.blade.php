@extends('mail/_layout')

@section('content')
    <h1>CEE Order exception</h1>

    <p>{{ $objException->getMessage() }}</p>

    <p>{{ $objException->getTraceAsString() }}</p>
@endsection