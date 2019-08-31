<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/b4helper.css') }}">
    <link rel="stylesheet" href="{{ mix('css/xs.css') }}">
    <link rel="stylesheet" href="{{ mix('css/sm.css') }}" media="(min-width:576px)">
    <link rel="stylesheet" href="{{ mix('css/md.css') }}" media="(min-width:768px)">
    <link rel="stylesheet" href="{{ mix('css/lg.css') }}" media="(min-width:992px)">
    <link rel="stylesheet" href="{{ mix('css/xl.css') }}" media="(min-width:1200px)">
    <link rel="stylesheet" href="{{ mix('css/fontawesome/css/all.min.css') }}">
    @yield('addCSS')
    <title>@yield('title', env('APP_NAME'))</title>
</head>

<body class="admin">
@yield('startBody')

@section('navigation')
    <nav id="memberNavbar" class="navbar navbar-expand-lg navbar-light bg-light generalNavbar">
        <a class="navbar-brand" href="{{ route('marketing.home') }}"><img src="{{ asset('images/logo-sm-white.png') }}"
                                                                       alt="Logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#memberNav" aria-controls="memberNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="memberNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('marketing.home') }}">Home</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Users
                    </a>

                    <div class="dropdown-menu lang" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('marketing.users.home') }}">All users</a>

                        <a class="dropdown-item" href="{{ route('marketing.users.byRole') }}">By role</a>

                        <a class="dropdown-item" href="{{ route('marketing.users.byStatus') }}">By status</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Articles
                    </a>

                    <div class="dropdown-menu lang" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('marketing.articles.home') }}">Articles</a>

                        <a class="dropdown-item" href="{{ route('marketing.articles.new') }}">New</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu lang" aria-labelledby="navbarDropdown">
                        @role('admin|super admin')
                            <a class="dropdown-item" href="{{ route('admin.home') }}">Admin area</a>
                        @endrole

                        @role('agent|super admin')
                            <a class="dropdown-item" href="{{ route('agent.home') }}">Agent area</a>
                        @endrole

                        <a class="dropdown-item" href="{{ route('member.home') }}">Member area</a>

                        <a class="dropdown-item" href="{{ route('public.home') }}">Public area</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('public.logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Log out
                        </a>

                        <form id="logout-form" class="d-none" action="{{ route('public.logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
@show

@yield('content')

@yield('endBody')

@include('flash::message')

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/main.js') }}"></script>

@yield('addJS')
</body>
</html>
