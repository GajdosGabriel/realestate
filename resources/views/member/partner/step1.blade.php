@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area / Partner program - STEP 1')

@section('content')
    <div class="container xs-pt-20 xs-pb-20">
        <h1 class="color_primary">STEP 1 preview</h1>

        <div class="alert alert-info"><p class="xs-mb-0"><i class="fas fa-info-circle"></i> This page is only preview of STEP 1 of ordering first Buy-fix-sell project.</p></div>

        <img src="{{ asset('images/member/screenshot_step1_full.jpg') }}" class="img-fluid d-block mx-auto" alt="">
    </div>
@endsection