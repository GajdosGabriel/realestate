@extends('mail/_layout')

@section('content')
    <h1>CEE Order</h1>

    <h3>Personal details</h3>

    <p>Name: {{ $objOrder->name }} {{ $objOrder->surname }}</p>

    <p>Street: {{ $objOrder->street }}</p>

    <p>City, ZIP: {{ $objOrder->city }}, {{ $objOrder->zip }}</p>

    <p>Region: {{ $objOrder->region }}</p>

    <p>Country: {{ $objOrder->country }}</p>

    <p>Nationality: {{ $objOrder->nationality }}</p>

    <p>E-mail: {{ $objOrder->email }}</p>

    <p>Phone: {{ $objOrder->phone_code }} {{ $objOrder->phone }}</p>

    <p>Government ID: {{ $objOrder->government_id }}</p>

    @if(isset($objOrder->company))
        <hr>

        <h3>Company details</h3>

        <p>Company name: {{ $objOrder->company->name }}</p>

        <p>Company ID number: {{ $objOrder->company->id_number }}</p>

        <p>Street: {{ $objOrder->company->street }}</p>

        <p>City, ZIP: {{ $objOrder->company->city }}, {{ $objOrder->company->zip }}</p>

        <p>Region: {{ $objOrder->company->region }}</p>

        <p>Country: {{ $objOrder->company->country }}</p>
    @endif

    @if(isset($objOrder->joint))
        <hr>

        <h3>Joint details</h3>

        <p>Full name: {{ $objOrder->joint->name }}</p>

        <p>Government ID number: {{ $objOrder->joint->government_id }}</p>
    @endif

    <hr>

    @if($objOrder->tdo)
        <h3>Title deed ownership</h3>

        <p>Project: {{ $objOrder->tdo->project->name }}</p>

        <p>Shares: {{ $objOrder->tdo->shares }}</p>
    @elseif($objOrder->sp)
        <h3>Silent Partnership</h3>

        <p>Project: {{ $objOrder->sp->project->name }}</p>

        <p>Shares: {{ number_format($objOrder->sp->shares, 2, ',', ' ') }}</p>
    @elseif($objOrder->pr)
        <h3>Pooled Resources</h3>

        <p>Duration: {{ $objOrder->pr->duration }} years</p>

        <p>Serial number(s) ({{ $objOrder->pr->number }}):
            {{ $objOrder->pr->serial_numbers }}
        </p>
    @endif
@endsection