@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Why invest in Šírava Park - Phase 1')

@section('startBody')
    @include('member/modals/parkModal')

    @include('member/modals/drone')
@endsection

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/hot/flldp/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>@lang('member/why_invest.title')</h1>
            </div>
        </div>
    </div>

    <div class="container project-details xs-mt-20">
        <div class="card">
            <div class="card-body">
                <p><strong>@lang('member/why_invest.60')</strong></p>
                <span>@lang('member/why_invest.61')</span><br>
                <span>@lang('member/why_invest.6b')</span><br>
{{--                <span>@lang('member/why_invest.6c')</span>--}}
                <p></p>

                {{--<h2 class="text-center">@lang('member/why_invest.master')</h2>--}}

                <a href="{{ asset('images/member/arch-'.App::getLocale().'.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/arch-'.App::getLocale().'.jpg') }}" class="img-fluid img-thumbnail d-block mx-auto" alt=""></a>

                <div class="text-center xs-mt-20">
                    <a href="{{ route('member.sirava.master_plan') }}" class="btn btn-primary" target="_blank">@lang('member/why_invest.pdf')</a>
                </div>

                {{--<div class="row">--}}
                    {{--<div class="col-12 col-lg-6">--}}
                        {{--<h2 class="text-center">@lang('member/why_invest.master')</h2>--}}

                        {{--<a href="{{ asset('images/member/arch_' . App::getLocale() . '.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/sm/arch_' . App::getLocale() . '.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>--}}

                        {{--<div class="text-center xs-mt-20">--}}
                            {{--<a href="{{ route('member.sirava.master_plan') }}" class="btn btn-primary" target="_blank">@lang('member/why_invest.pdf')</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-12 col-lg-6">--}}
                        {{--<h2 class="text-center">@lang('member/why_invest.beach')</h2>--}}

                        {{--<a href="{{ asset('images/member/beach/page.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/beach/page.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>--}}

                        {{--<div class="text-center xs-mt-20">--}}
                            {{--<a href="{{ route('member.sirava.beach_mp') }}" class="btn btn-primary" target="_blank">@lang('member/why_invest.beach2')</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <hr class="part primary">

                @include('member.includes._silent_partnership')

                <hr class="part primary">

                {{-- Pool resources--}}
                <h2 class="mt-4">@lang('member/how.pooled_resources')</h2>
                <p>@lang('member/how.pooled_resources2')</p>


                <hr class="part primary">






                {{--<div class="row">--}}
                    {{--<div class="col-12 col-lg-6">--}}
                        {{--<h4 class="text-center xs-mt-20">@lang('member/why_invest.1')</h4>--}}

                        {{--<a href="{{ asset('images/member/houses/apartment_house.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/houses/sm/apartment_house.jpg') }}" class="img-fluid img-thumbnail d-block mx-auto" alt="" data-aos="zoom-in"></a>--}}

                        {{--<p class="text-center xs-mt-10">{!! trans('member/why_invest.1b') !!}</p>--}}
                    {{--</div>--}}

                    {{--<div class="col-12 col-lg-6">--}}
                        {{--<h4 class="text-center xs-mt-20">@lang('member/why_invest.5')</h4>--}}

                        {{--<a href="{{ asset('images/member/houses/villa.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/houses/sm/villa.jpg') }}" class="img-fluid img-thumbnail d-block mx-auto" alt="" data-aos="zoom-in"></a>--}}

                        {{--<p class="text-center xs-mt-10">{!! trans('member/why_invest.5b') !!}</p>--}}
                    {{--</div>--}}

                    {{--<div class="col-12 col-lg-4">--}}
                        {{--<h4 class="text-center xs-mt-20">@lang('member/why_invest.2')</h4>--}}

                        {{--<a href="{{ asset('images/member/houses/detached_house.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/houses/sm/detached_house.jpg') }}" class="img-fluid img-thumbnail d-block mx-auto" alt="" data-aos="zoom-in"></a>--}}

                        {{--<p class="text-center xs-mt-10">{!! trans('member/why_invest.2b') !!}</p>--}}
                    {{--</div>--}}

                    {{--<div class="col-12 col-lg-4">--}}
                        {{--<h4 class="text-center xs-mt-20">@lang('member/why_invest.3')</h4>--}}

                        {{--<a href="{{ asset('images/member/houses/semidetached_house.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/houses/sm/semidetached_house.jpg') }}" class="img-fluid img-thumbnail d-block mx-auto" alt="" data-aos="zoom-in"></a>--}}

                        {{--<p class="text-center xs-mt-10">{!! trans('member/why_invest.3b') !!}</p>--}}
                    {{--</div>--}}

                    {{--<div class="col-12 col-lg-4">--}}
                        {{--<h4 class="text-center xs-mt-20">@lang('member/why_invest.4')</h4>--}}

                        {{--<a href="{{ asset('images/member/houses/standard_house.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/houses/sm/standard_house.jpg') }}" class="img-fluid img-thumbnail d-block mx-auto" alt="" data-aos="zoom-in"></a>--}}

                        {{--<p class="text-center xs-mt-10">{!! trans('member/why_invest.4b') !!}</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <img src="{{ asset('images/member/invest_table-'.App::getLocale().'.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in">


                <div class="text-center xs-mt-20">
                    <a href="{{ route('member.sirava.business_plan') }}" class="btn btn-primary" target="_blank">@lang('member/why_invest.bp')</a>
                </div>

                <hr class="part primary">

                @include('includes/videos/mixed')

                {{--<hr class="part primary">--}}

{{--                <h4 class="text-center">@lang('member/why_invest.future')</h4>--}}


                {{--<p class="pt-2">@lang('member/why_invest.after_video1')</p>--}}
{{--                <p class="pt-2">@lang('member/why_invest.future_text')</p>--}}

{{--                <img src="{{ asset('images/pub/carousel/1.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in">--}}


                {{--<div class="text-center xs-mt-20">--}}
                    {{--<a href="" class="btn btn-primary xs-mb-10" data-toggle="modal" data-target="#parkModal">@lang('member/index.parkVideo')</a>--}}

                    {{--<a href="" class="btn btn-secondary xs-mb-10" data-toggle="modal" data-target="#droneModal">@lang('member/index.droneVideo')</a>--}}
                {{--</div>--}}

                <hr class="part primary">

                <h4 class="text-center">@lang('member/why_invest.location')</h4>

                <p class="pt-2">@lang('member/location.text')</p>

                <p>@lang('member/location.text2')</p>

                <p>@lang('member/location.text3')</p>

                <div class="row">
                    <div class="col-12 col-lg-4">
                        <a href="{{ asset('images/member/hot/flldp/15.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/15.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
                    </div>

                    <div class="col-12 col-lg-4">
                        <a href="{{ asset('images/member/hot/flldp/16.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/16.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
                    </div>

                    <div class="col-12 col-lg-4">
                        <a href="{{ asset('images/member/hot/flldp/17.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/17.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
                    </div>
                </div>

                {{--<div class="embed-responsive embed-responsive-16by9 xs-mt-20">--}}
                    {{--<iframe allow="vr,gyroscope,accelerometer,fullscreen" scrolling="no" allowfullscreen="true" src="https://kuula.co/share/7Pj3d?fs=1&vr=0&thumbs=1&chromeless=0&logo=0"></iframe>--}}
                {{--</div>--}}

                {{--<hr class="part primary">--}}

                {{--<h4 class="text-center">@lang('member/why_invest.spa')</h4>--}}

                {{--<p class="xs-mt-20">@lang('member/why_invest.spa1')</p>--}}

                {{--<p>@lang('member/why_invest.spa2')</p>--}}

                {{--<p>@lang('member/why_invest.spa3')</p>--}}

                {{--<a href="{{ asset('images/member/spa.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/sm/spa.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>--}}

                <hr class="part primary">

                <h4 class="text-center xs-mb-20">@lang('member/location.distance')</h4>

                <ul>
                    <li>@lang('member/location.1')</li>

                    <li>@lang('member/location.2')</li>

                    <li>@lang('member/location.3')</li>

                    <li>@lang('member/location.4')</li>

                    <li>@lang('member/location.5')</li>

                    <li>@lang('member/location.6')</li>
                </ul>

                @if(App::getLocale() == 'nl')
                    <a href="{{ asset('images/member/hot/flldp/highway_nl.jpg') }}" data-lightbox="photos">
                        <img src="{{ asset('images/member/hot/flldp/sm/highway_nl.jpg') }}" class="img-fluid mx-auto" alt="" data-aos="zoom-in">
                    </a>
                @else
                <a href="{{ asset('images/member/hot/flldp/highway.jpg') }}" data-lightbox="photos">
                    <img src="{{ asset('images/member/hot/flldp/sm/highway.jpg') }}" class="img-fluid mx-auto" alt="" data-aos="zoom-in">
                </a>
                @endif

                <hr class="part primary">

                <h4 class="text-center xs-mb-20">@lang('member/location.highway')</h4>

                <p>@lang('member/location.text4')</p>

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/hYkBf-OIjsI?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>

                {{--<div class="row">--}}
                    {{--<div class="col-12 col-lg-8 offset-lg-2">--}}
                        {{--<a href="{{ asset('images/member/hot/flldp/master_plan/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/master_plan/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="text-center xs-mt-20">--}}
                    {{--@if(App::getLocale() == 'sk')--}}
                        {{--<a href="{{ asset('documents/sirava_park_sk.pdf') }}" class="btn btn-secondary" target="_blank">@lang('general.downloadMasterPlan')</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ asset('documents/sirava_park.pdf') }}" class="btn btn-secondary" target="_blank">@lang('general.downloadMasterPlan')</a>--}}
                    {{--@endif--}}
                {{--</div>--}}

                {{--@include('includes/videos/siravaPhase1')--}}

                {{--<p class="lead color_primary font-weight-bold xs-mt-20">@lang('member/news.title2')</p>--}}

                {{--<ul>--}}
                    {{--<li>@lang('member/news.text') - <i class="fas fa-check text-success"></i> <span class="color_primary">@lang('member/news.obtained')</span></li>--}}

                    {{--<li>@lang('member/news.text2') - <i class="fas fa-check text-success"></i> <span class="color_primary">@lang('member/news.obtained')</span></li>--}}

                    {{--<li>@lang('member/news.text3') - <i class="fas fa-check text-success"></i> <span class="color_primary">@lang('member/news.obtained')</span></li>--}}

                    {{--<li>@lang('member/news.text4') - <span class="color_primary">@lang('member/news.expect')</span></li>--}}
                {{--</ul>--}}

                {{--<p class="lead">@lang('member/news.title3')</p>--}}

                {{--<ul>--}}
                    {{--<li>@lang('member/news.1')</li>--}}

                    {{--<li>@lang('member/news.2')</li>--}}

                    {{--<li>@lang('member/news.3')</li>--}}

                    {{--<li>@lang('member/news.4')</li>--}}

                    {{--<li>@lang('member/news.5')</li>--}}

                    {{--<li>@lang('member/news.6')</li>--}}
                {{--</ul>--}}

                {{--<div class="text-center">--}}
                    {{--@if(App::getLocale() == 'sk')--}}
                        {{--<a href="{{ asset('documents/phase1_sk.pdf') }}" class="btn btn-primary xs-mt-20 xs-mb-20" target="_blank">@lang('member/why_invest.plan')</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ asset('documents/phase1.pdf') }}" class="btn btn-primary xs-mt-20 xs-mb-20" target="_blank">@lang('member/why_invest.plan')</a>--}}
                    {{--@endif--}}
                {{--</div>--}}

                {{--@include('includes/videos/siravaPark')--}}
            </div>
        </div>
    </div>

    <div class="text-center xs-mt-20 xs-mb-20">
        <a href="{{ route('member.home') }}" class="btn btn-secondary">@lang('public/nav.home')</a>

        <a href="{{ route('member.invest') }}" class="btn btn-primary">@lang('member/nav.invest')</a>
    </div>
@endsection