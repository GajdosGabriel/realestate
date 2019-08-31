@extends('mail/_layout')

@section('content')
    <h1>CEE Document upload</h1>

    <p>User uploaded document: <strong>{{ $objDocument->document->name }}</strong></p>

    <p>ID: {{ Auth::user()->id }}</p>

    <p>Name: {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
@endsection