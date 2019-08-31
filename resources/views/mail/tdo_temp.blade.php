@extends('mail/_layout')

@section('content')
    <h1>CEE Request TDO temporary</h1>

    <h3>Personal details</h3>

    <p>Name: {{ $objRequest->name }} {{ $objRequest->surname }}</p>

    <p>Street: {{ $objRequest->street }}</p>

    <p>City, ZIP: {{ $objRequest->city }}, {{ $objRequest->zip }}</p>

    <p>Region: {{ $objRequest->region }}</p>

    <p>Country: {{ $objRequest->country }}</p>

    <p>Nationality: {{ $objRequest->nationality }}</p>

    <p>E-mail: {{ $objRequest->email }}</p>

    <p>Phone: {{ $objRequest->phone_code }} {{ $objRequest->phone }}</p>

    <p>Government ID: {{ $objRequest->government_id }}</p>

    @if(isset($objRequest->company))
        <hr>

        <h3>Company details</h3>

        <p>Company name: {{ $objRequest->company['name'] }}</p>

        <p>Company ID number: {{ $objRequest->company['id_number'] }}</p>

        <p>Street: {{ $objRequest->company['street'] }}</p>

        <p>City, ZIP: {{ $objRequest->company['city'] }}, {{ $objRequest->company['zip'] }}</p>

        <p>Region: {{ $objRequest->company['region'] }}</p>

        <p>Country: {{ $objRequest->company['country'] }}</p>
    @endif

    @if(isset($objRequest->joint))
        <hr>

        <h3>Joint details</h3>

        <p>Full name: {{ $objRequest->joint['name'] }}</p>

        <p>Government ID number: {{ $objRequest->joint['id'] }}</p>
    @endif

    <hr>

    <h3>Title deed ownership</h3>

    <p>Shares: {{ $objRequest->tdo['project']['shares'] }}</p>
@endsection