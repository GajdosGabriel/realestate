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
                </ul>
            </div>
        </nav>
    </div>
@endsection

@section('content')
    <div class="container-fluid bg_secondary">
        <div class="container pageBlock xs-pb-20">
            <h3>@lang('legal/cookies.title2')</h3>

            <p>@lang('legal/cookies.text2')</p>

            <p>@lang('legal/cookies.text3')</p>

            <p class="font-weight-bold">@lang('legal/cookies.text4')</p>

            <h4 class="xs-mt-20">@lang('legal/cookies.partners')</h4>

            <form action="{{ route('public.cookiesPost') }}" method="POST" id="gdprForm" class="cee">
                @csrf

                <p></p>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="cee" name="cee" checked disabled>
                    <label class="form-check-label" for="cee" data-toggle="tooltip" data-placement="right" title="@lang('legal/cookies.mandatory')">
                        CEE Real Estate Group
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="adroll" name="adroll" value="0">
                    <label class="form-check-label" for="adroll">
                        <a href="https://www.adrollgroup.com/trust-center" target="_blank">AdRoll</a>
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="fb" name="fb" value="0">
                    <label class="form-check-label" for="fb">
                        <a href="https://www.facebook.com/policy" target="_blank">Facebook</a>
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gl" name="gl" value="0">
                    <label class="form-check-label" for="gl">
                        <a href="https://policies.google.com/technologies/ads" target="_blank">Google</a>
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="chat" name="chat" value="0">
                    <label class="form-check-label" for="chat">
                        <a href="https://www.livechatinc.com/general-data-protection-regulation/" target="_blank">LiveChat inc</a>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary xs-mt-20">@lang('form.submit')</button>
            </form>
        </div>
    </div>
@endsection

@section('cookieConsent')
@endsection
