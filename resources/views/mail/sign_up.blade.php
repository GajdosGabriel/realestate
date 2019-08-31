@extends('mail/_layout')

@section('content')
    <h1>CEE Sign up</h1>

    <p>Name: {{ $data['name'] }} {{ $data['surname'] }}</p>

    <p>E-mail: <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></p>

    <p>Phone: +{{ $data['phone_code'] }} {{ $data['phone'] }}</p>

    <p>Country: {{ $data['country'] }}</p>
@endsection