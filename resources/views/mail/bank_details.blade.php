@extends('mail/_layout')

@section('content')
    <h1>CEE User bank details</h1>

    <p>Name: {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>

    <p>E-mail: <a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a></p>

    <p>IBAN: {{ $data['iban'] }}</p>

    <p>Account holder name: {{ $data['name'] }}</p>

    <p>Account holder address: {{ $data['address'] }}</p>

    <p>Bank name: {{ $data['bank_name'] }}</p>

    <p>Bank address: {{ $data['bank_address'] }}</p>

    <p>BIC/SWIFT: {{ $data['bic'] }}</p>
@endsection