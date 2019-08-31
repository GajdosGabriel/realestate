<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/b4helper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/xs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sm.css') }}" media="(min-width:576px)">
    <link rel="stylesheet" href="{{ asset('css/md.css') }}" media="(min-width:768px)">
    <link rel="stylesheet" href="{{ asset('css/lg.css') }}" media="(min-width:992px)">
    <link rel="stylesheet" href="{{ asset('css/xl.css') }}" media="(min-width:1200px)">
    <script defer src="https://use.fontawesome.com/releases/v5.0.12/js/all.js"
            integrity="sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR" crossorigin="anonymous"></script>
    @yield('addCSS')
    <title>@yield('title', env('APP_NAME'))</title>
</head>

<body>
@include('member/bonds/modals/bondFAQModal')

@include('member/bonds/modals/bondRdModal')

@include('public/modals/ppModal')

@include('public/modals/tacModal')

@yield('startBody')

@section('navigation')
    <div>
        <nav id="memberNavbar" class="navbar navbar-expand-lg navbar-light bg-light generalNavbar">
            <a class="navbar-brand" href="{{ route('member.home') }}"><img src="{{ asset('images/logo-sm-white.png') }}"
                                                                           alt="Logo"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#memberNav" aria-controls="memberNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="memberNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('member.home') }}">@lang('nav.home')</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Investments
                        </a>

                        <div class="dropdown-menu lang" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('member.properties.home') }}">Investment properties</a>

                            <a class="dropdown-item" href="{{ route('member.land.home') }}">Land investments</a>

                            <a class="dropdown-item" href="{{ route('member.developments.home') }}">New developments</a>
                        </div>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('member.bonds.home') }}">Bonds/funds</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('member.news.home') }}">News room</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('member.contact') }}">Contact</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i> {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu lang" aria-labelledby="navbarDropdown">
                            @role('admin|super admin')
                                <a class="dropdown-item" href="{{ route('admin.home') }}">Admin area</a>
                            @endrole

                            <a class="dropdown-item" href="{{ route('member.partner') }}">Partner program</a>

                            <a class="dropdown-item" href="{{ route('member.account') }}">Account</a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Log out
                            </a>

                            <form id="logout-form" class="d-none" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-globe"></i>
                        </a>

                        <div class="dropdown-menu lang" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('lang', ['lang' => 'de']) }}">Deutsch</a>

                            <a class="dropdown-item" href="{{ route('lang', ['lang' => 'en']) }}">English</a>
                        </div>
                    </li>
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
                    <p class="text-center"><a href="" data-toggle="modal" data-target="#bondFAQModal">FAQ</a></p>
                </div>

                <div class="col-6 col-lg-3">
                    <p class="text-center"><a href="" data-toggle="modal" data-target="#bondRdModal">Risk disclosure</a></p>
                </div>

                <div class="col-6 col-lg-3">
                    <p class="text-center"><a href="" data-toggle="modal" data-target="#ppModal">Privacy policy</a></p>
                </div>

                <div class="col-6 col-lg-3">
                    <p class="text-center"><a href="" data-toggle="modal" data-target="#tacModal">Terms & conditions</a></p>
                </div>
            </div>

            <p class="text text-center xs-mt-20 xs-mb-20 lg-mt-30 lg-mb-30">@lang('footer.text')</p>

            <div class="row socials text-center xs-mb-20 lg-mb-30">
                <div class="col-3 col-lg-2 offset-lg-2">
                    <a href="https://www.facebook.com/CEERealEstateGroup/" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                </div>

                <div class="col-3 col-lg-2">
                    <a href="https://twitter.com/CeeEstate" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>

                <div class="col-3 col-lg-2">
                    <a href="https://www.instagram.com/cee_realestate/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>

                <div class="col-3 col-lg-2">
                    <a href="https://www.linkedin.com/company/cee-real-estate-group/" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <p class="text-center xs-mb-0">
                {{ env('APP_NAME') }} &copy; {{ date('Y') == 2018 ? '2018' : '2018 - ' . date('Y') }}</p>
        </div>
    </div>
@show

@yield('endBody')

@include('flash::message')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

@include('includes/codes/google')

@include('includes/codes/chat')

@yield('addJS')
</body>
</html>
