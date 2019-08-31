@extends('member/contracts/_layout')

@section('content')
    <sethtmlpageheader name="cee" show-this-page="1" />
    <sethtmlpagefooter name="cee" />

    @if($objOrder->tdo)
        @component('components/member/contracts/tdo_mandate', ['objOrder' => $objOrder])@endcomponent
    @elseif($objOrder->pr)
        @component('components/member/contracts/pr_contract', ['objOrder' => $objOrder])@endcomponent
    @endif
@endsection