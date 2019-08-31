@extends('member/contracts/_layout')

@section('content')
    <sethtmlpageheader name="cee" show-this-page="1" />
    <sethtmlpagefooter name="cee" />

    @if($annex == 1)
        @component('components/member/contracts/tdo_annex1', ['objOrder' => $objOrder])@endcomponent
    @elseif($annex == 2)
        @component('components/member/contracts/tdo_annex2', ['objOrder' => $objOrder])@endcomponent
    @endif
@endsection