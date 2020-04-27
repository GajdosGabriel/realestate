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
        <a class="navbar-brand" href="{{ route('agent.home') }}"><img src="{{ asset('images/logo-sm-white.png') }}"
                                                                       alt="Logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#memberNav" aria-controls="memberNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="memberNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('agent.home') }}">Home</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Users
                    </a>

                    <div class="dropdown-menu lang" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('agent.users.home') }}">All users</a>

                        <a class="dropdown-item" href="{{ route('agent.users.byRole') }}">By role</a>

                        <a class="dropdown-item" href="{{ route('agent.users.byStatus') }}">By status</a>

                        @if(Auth::user()->id == 457)
                            <a class="dropdown-item" href="{{ route('agent.users.skczhu') }}">SK / CZ / HU</a>
                        @endif

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('agent.users.new') }}">New user</a>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('agent.reminders.home') }}">Reminders</a></li>

                <li class="nav-item"><a class="nav-link" href="{{ route('agent.leads.index') }}">Leads</a></li>

                <li class="nav-item"><a class="nav-link" href="{{ route('agent.leads.hot') }}">Hot leads</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu lang" aria-labelledby="navbarDropdown">
                        @role('admin')
                            <a class="dropdown-item" href="{{ route('admin.home') }}">Admin area</a>
                        @endrole

                        @role('marketing')
                            <a class="dropdown-item" href="{{ route('marketing.home') }}">Marketing area</a>
                        @endrole

                        <a class="dropdown-item" href="{{ route('member.home') }}">Member area</a>

                        <a class="dropdown-item" href="{{ route('public.home') }}">Public area</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href=""
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

@if(count(Session::get('upcomingReminders')) > 0)
    <div id="remindersBlock">
        <a class="btn btn-secondary btn-xs float-right" data-toggle="collapse" href="#upcomingRemindersCollapse" role="button"><i class="fas fa-caret-down"></i> Expand/Collapse</a>

        <h5 class="text-danger xs-mb-0">Upcoming reminders <span class="badge badge-secondary">{{ count(Session::get('upcomingReminders')) }}</span></h5>

        <div id="upcomingRemindersCollapse" class="collapse xs-mt-10">
            <ul class="list-group users">
                @foreach(Session::get('upcomingReminders') as $objReminder)
                    @component('components/agent/upcomingReminder', ['objReminder' => $objReminder])@endcomponent
                @endforeach
            </ul>

            <div class="text-center xs-mt-10">
                <a class="btn btn-secondary btn-xs" data-toggle="collapse" href="#upcomingRemindersCollapse" role="button"><i class="fas fa-caret-down"></i> Expand/Collapse</a>
            </div>
        </div>
    </div>
@endif

@yield('endBody')

@include('flash::message')

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/main.js') }}"></script>

@yield('addJS')
</body>
</html>