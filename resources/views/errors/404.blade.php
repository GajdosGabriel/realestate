@extends('public/_layout')

@section('title', env('APP_NAME'))

@section('navigation')
@endsection

@section('content')
    <div class="bg_secondary text-center xs-pt-20 xs-pb-20 lg-pt-50 lg-pb-50">
        <img src="{{ asset('images/logo-sm.png') }}" class="img-fluid d-block mx-auto" alt="">

        <h1 class="color_primary font-weight-bold xs-mt-20 lg-mt-50">Page not found</h1>

        <p class="lead">The page you are looking for does not exist. Please check the URL address.</p>

        <hr class="part primary">

        <a href="{{ route('public.home') }}" class="btn btn-secondary">Go to Homepage</a>
    </div>
@endsection