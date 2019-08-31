@extends('mail/_layout')

@section('content')
    <h1>{{ $data['subject'] ?? 'CEE Contact form' }}</h1>

    @if(isset($data['project']))
        <a href="{{ $data['project'] }}">Project page</a>
    @endif

    <p>Name: {{ $data['name'] ?? Auth::user()->name }} {{ $data['surname'] ?? Auth::user()->surname }}</p>

    <p>E-mail: <a href="mailto:{{ $data['email'] ?? Auth::user()->email }}">{{ $data['email'] ?? Auth::user()->email }}</a></p>

    <p>Phone: +{{ $data['phone_code'] ?? Auth::user()->phone_code }} {{ $data['phone'] ?? Auth::user()->phone }}</p>

    <p>Message: {{ $data['text'] ?? '' }}</p>

    @if(isset($data['company']))
        <p>Company name: {{ $data['company'] }}</p>

        <p>Company website: {{ $data['url'] }}</p>
    @endif
@endsection