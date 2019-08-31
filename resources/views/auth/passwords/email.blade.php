@extends('public/_layout')

@section('navigation')
    <div>
        <div id="infobar" class="d-none d-lg-block">
            <div class="row">
                <div class="col-8">
                    <p>@lang('public/nav.call'): <span class="color_primary">+421 2/330 561 41</span></p>
                </div>

                <div class="col-4 text-right">
                    <p class="socials">
                        <a href="" target="_blank"><i class="fab fa-facebook"></i></a>

                        <a href="" target="_blank"><i class="fab fa-twitter"></i></a>

                        <a href="" target="_blank"><i class="fab fa-instagram"></i></a>

                        <a href="" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </p>
                </div>
            </div>
        </div>

        <nav id="publicNavbar" class="navbar navbar-expand-lg navbar-light bg-light generalNavbar">
            <a class="navbar-brand" href="{{ route('public.home') }}"><img src="{{ asset('images/logo-sm.png') }}" alt="Logo"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="publicNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('public.home') }}">@lang('public/nav.home')</a></li>

                    {{--<li class="nav-item dropdown">--}}
                        {{--<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--<i class="fa fa-globe"></i>--}}
                        {{--</a>--}}

                        {{--<div class="dropdown-menu lang" aria-labelledby="navbarDropdown">--}}
                            {{--<a class="dropdown-item" href="{{ route('lang', ['lang' => 'de']) }}">Deutsch</a>--}}

                            {{--<a class="dropdown-item" href="{{ route('lang', ['lang' => 'en']) }}">English</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </nav>
    </div>
@endsection

@section('content')
<div class="container-fluid pageBlock xs-pb-50 bg_secondary">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="cee" method="POST" action="{{ route('public.password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
