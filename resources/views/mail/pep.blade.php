@extends('mail/_layout')

@section('content')
    <h1>CEE User PEP</h1>

    <p>ID: {{ Auth::user()->id }}</p>

    <p>Name: {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>

    <p>E-mail: <a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a></p>

    <hr>

    <p><strong>Is client a politically exposed person (PEP)?</strong> {{ $data['is_pep'] }}, {{ $data['type'] ?? '' }}</p>

    <p><strong>Is client a sanctioned person within the meaning of Act no. 289/2016 Z. z. on the implementation of international sanctions?</strong> {{ $data['sanctioned'] }}</p>

    <p><strong>Is client a beneficiary of benefits within the meaning of Section 6a of Act no. 297/2008 Coll.</strong> {{ $data['end_user'] }}</p>

    <p><strong>Identifying the origin of funds or assets in a business or business relationship,</strong></p>

    <p>(a) Do you work in the public sector, the corporate sector (as a member of the board of directors) or in foundations / associations / legal entities (receiving or managing public funds)? {{ $data['government_sector'] }}, {{ $data['government_sector_type'] }}</p>

    <p>(b) You are working in one of these sectors, weapons, gambling / betting offices, waste collection, metal production, car sales, production of chemical products, etc.? {{ $data['sectors'] }}, {{ $data['sector_type'] }}</p>

    <p>c) Do you own a business company or a share in a business to the extent that it is the source of income? {{ $data['businessman'] }}</p>

    <p><strong>Obtaining information about the purpose and the intended nature of a business or business relationship</strong> {{ $data['investment'] }}</p>
@endsection