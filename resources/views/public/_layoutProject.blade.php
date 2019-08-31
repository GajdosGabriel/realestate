@extends('public/_layout')

@section('addCSS')
    <link rel="stylesheet" href="{{ mix('css/lightbox/css/lightbox.min.css') }}">
@endsection

@section('title')
    {{ env('APP_NAME') }} :: PUBLIC - @yield('projectName')
@endsection

@section('navigation')
    <div class="sticky-top">
        @include('cookieConsent::index')

        <div id="infobar" class="d-none d-lg-block">
            <div class="row">
                <div class="col-8">
                    <p>@lang('public/nav.call'): <span class="font-weight-bold color_primary">+421 233 056 141</span></p>
                </div>

                <div class="col-4 text-right">
                    <p class="socials">
                        <a href="{{ config('cee.gl') }}" target="_blank"><i class="fab fa-google"></i></a>

                        <a href="{{ config('cee.fb') }}" target="_blank"><i class="fab fa-facebook"></i></a>

                        <a href="{{ config('cee.tw') }}" target="_blank"><i class="fab fa-twitter"></i></a>

                        <a href="{{ config('cee.li') }}" target="_blank"><i class="fab fa-linkedin"></i></a>

                        <a href="{{ config('cee.ig') }}" target="_blank"><i class="fab fa-instagram"></i></a>
                    </p>
                </div>
            </div>
        </div>

        <nav id="publicNavbar" class="navbar navbar-expand-lg navbar-light bg-light generalNavbar">
            <a class="navbar-brand" href="{{ route('public.home') }}"><img src="{{ asset('images/logo-sm.png') }}" alt="Logo"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#publicNav" aria-controls="publicNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="/#homeBlock">@lang('public/nav.home')</a></li>

                    <li class="nav-item"><a class="nav-link" href="/#projectBlock">@lang('public/nav.project')</a></li>

                    <li class="nav-item"><a class="nav-link" href="/#aboutBlock">@lang('public/nav.aboutUs')</a></li>

                    <li class="nav-item"><a class="nav-link" href="/#newsBlock">@lang('public/nav.news')</a></li>

                    <li class="nav-item"><a class="nav-link" href="/#contactBlock">@lang('public/nav.contact')</a></li>
                </ul>
            </div>
        </nav>
    </div>
@endsection

@section('content')
    <div class="container-fluid project-header">
        @yield('projectHeader')
    </div>

    <div class="bg_tertiary xs-pt-20 xs-pb-20 lg-pt-30 lg-pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 project-details">
                    @yield('projectContent')
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock public">
                        @yield('projectDetails')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('addJS')
    <script type="text/javascript" src="{{ asset('js/lightbox/lightbox.min.js') }}"></script>
@endsection