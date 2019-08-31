@extends('mail/_layout')

@section('content')
    <h1>CEE Self Certification</h1>

    <p>Name: {{ $objRequest->full_name }}</p>

    <p>E-mail: {{ $objRequest->email }}</p>

    <p>Certified as <strong>{{ $objRequest->type }}</strong> on {{ date('j.n.Y H:i:s', time()) }}</p>
@endsection