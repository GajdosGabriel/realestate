<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes/codes/fb')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/b4helper.css') }}">
    <link rel="stylesheet" href="{{ mix('css/xs.css') }}">
    <link rel="stylesheet" href="{{ mix('css/sm.css') }}" media="(min-width:576px)">
    <link rel="stylesheet" href="{{ mix('css/md.css') }}" media="(min-width:768px)">
    <link rel="stylesheet" href="{{ mix('css/lg.css') }}" media="(min-width:992px)">
    <link rel="stylesheet" href="{{ mix('css/xl.css') }}" media="(min-width:1200px)">
    <link rel="stylesheet" href="{{ mix('css/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/aos/aos.css') }}">
    @yield('addCSS')
    <title>@yield('title', env('APP_NAME'))</title>
</head>

<body data-spy="scroll" data-target="#publicNav">
@if(Auth::guest())
    @include('public/modals/loginModal')

    @include('public/modals/registerModal')
@endif

@include('public/modals/contactModal')

@include('public/modals/rdModal')

@include('public/modals/ppModal')

@include('public/modals/tacModal')

@yield('startBody')

@section('navigation')
    <div class="sticky-top">
        @include('cookieConsent::index')

        <div id="infobar" class="d-none d-lg-block">
            <div class="row">
                <div class="col-8">
                    <p>@lang('public/nav.call'): <span class="font-weight-bold color_primary">+421 (0)2 207 001 55</span></p>
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

            <div class="collapse navbar-collapse" id="publicNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('public.home') }}">@lang('public/nav.home')</a></li>

                    @if(App::getLocale() != 'en')
                        <li class="nav-item"><a class="nav-link" href="{{ route('public.lang', ['lang' => 'en']) }}"><img src="{{ asset('images/flag_en.png') }}" alt=""> <span class="d-lg-none">English</span></a></li>
                    @endif

                    @if(App::getLocale() != 'sk')
                        <li class="nav-item"><a class="nav-link" href="{{ route('public.lang', ['lang' => 'sk']) }}"><img src="{{ asset('images/flag_sk.png') }}" alt=""> <span class="d-lg-none">Slovensky</span></a></li>
                    @endif

                    @if(App::getLocale() != 'nl')
                        <li class="nav-item"><a class="nav-link" href="{{ route('public.lang', ['lang' => 'nl']) }}"><img src="{{ asset('images/flag_nl.png') }}" alt=""> <span class="d-lg-none">Nederlands</span></a></li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
@show

@yield('content')

@section('footer')
    <div id="pageFooter">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <p class="text-center"><a href="{{ route('public.certification.index') }}">@lang('cert/index.title')</a></p>
                </div>

                <div class="col-6 col-lg-3">
                    <p class="text-center"><a href="" data-toggle="modal" data-target="#rdModal">@lang('legal/rd.title')</a></p>
                </div>

                <div class="col-6 col-lg-3">
                    <p class="text-center"><a href="" data-toggle="modal" data-target="#ppModal">@lang('legal/pp.title')</a></p>
                </div>

                <div class="col-6 col-lg-3">
                    <p class="text-center"><a href="" data-toggle="modal" data-target="#tacModal">@lang('legal/tac.title')</a></p>
                </div>
            </div>

            <p class="text text-center xs-mt-20 xs-mb-20 lg-mt-30 lg-mb-30">@lang('footer.text')</p>

            <div class="row socials text-center xs-mb-20 lg-mb-30">
                <div class="col-2 offset-1">
                    <a href="{{ config('cee.gl') }}" target="_blank"><i class="fab fa-google"></i></a>
                </div>

                <div class="col-2">
                    <a href="{{ config('cee.fb') }}" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>

                <div class="col-2">
                    <a href="{{ config('cee.tw') }}" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>

                <div class="col-2">
                    <a href="{{ config('cee.li') }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>

                <div class="col-2">
                    <a href="{{ config('cee.ig') }}" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <p class="text-center xs-mb-0">{{ env('APP_NAME') }} &copy; {{ '2018 - ' . date('Y') }}</p>
        </div>
    </div>
@show

@yield('endBody')

<a id="arrowUp" href="#homeBlock" class="internal d-none d-lg-block" title="Scroll up!"><i class="fa fa-arrow-up"></i></a>

@include('flash::message')

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/aos/aos.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/main.js') }}"></script>
<script type="text/javascript">
    AOS.init();
</script>

@if(Session::has('modal'))
    <script type="text/javascript">
        $('{!! '#' . Session::get('modal') . 'Modal' !!}').modal();
    </script>

    @php
        Session::forget('modal');
    @endphp
@endif

@include('includes/codes/google')

{{--@include('includes/codes/chat')--}}

@include('includes/codes/adroll')

@include('includes/codes/smartlook')

@yield('addJS')
</body>
</html>