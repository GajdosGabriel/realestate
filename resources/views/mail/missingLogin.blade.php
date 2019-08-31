@extends('mail/_layout')

@section('content')
    <h1>{{ 'Missing login' }}</h1>

    <p>Name: {{ $user->name ?? '' }} {{ $user->surname ?? '' }}</p>

    <p>E-mail: {{ $user->email ?? '' }}</p>
@endsection