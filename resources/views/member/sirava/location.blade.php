@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Location')

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/hot/flldp/22.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>@lang('member/index.location')</h1>

                <h3 class="color_primary xs-mb-0">@lang('member/why_invest.subtitle')</h3>
            </div>
        </div>
    </div>

    <div class="container project-details xs-mt-20">
        <div class="card">
            <div class="card-body">
                <p>@lang('member/location.text')</p>

                <p>@lang('member/location.text2')</p>

                <p>@lang('member/location.text3')</p>

                <div class="row">
                    <div class="col-12 col-lg-4">
                        <a href="{{ asset('images/member/hot/flldp/15.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/15.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                    </div>

                    <div class="col-12 col-lg-4">
                        <a href="{{ asset('images/member/hot/flldp/16.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/16.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                    </div>

                    <div class="col-12 col-lg-4">
                        <a href="{{ asset('images/member/hot/flldp/17.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/17.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                    </div>
                </div>

                <div class="embed-responsive embed-responsive-16by9 xs-mt-20">
                    <iframe allow="vr,gyroscope,accelerometer,fullscreen" scrolling="no" allowfullscreen="true" src="https://kuula.co/share/7Pj3d?fs=1&vr=0&thumbs=1&chromeless=0&logo=0"></iframe>
                </div>

                <p class="lead xs-mt-20">@lang('member/location.distance')</p>

                <ul>
                    <li>@lang('member/location.1')</li>

                    <li>@lang('member/location.2')</li>

                    <li>@lang('member/location.3')</li>

                    <li>@lang('member/location.4')</li>

                    <li>@lang('member/location.5')</li>

                    <li>@lang('member/location.6')</li>
                </ul>

                <a href="{{ asset('images/member/hot/flldp/highway.png') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/highway.png') }}" class="img-fluid mx-auto" alt=""></a>

                <p class="lead xs-mt-20">@lang('member/location.highway')</p>

                <p>@lang('member/location.text4')</p>

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/hYkBf-OIjsI?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="text-center xs-mt-20 xs-mb-20">
            <a href="{{ route('member.home') }}" class="btn btn-secondary">@lang('public/nav.home')</a>

            <a href="{{ route('member.invest') }}" class="btn btn-primary">@lang('member/nav.invest')</a>
        </div>
    </div>
@endsection