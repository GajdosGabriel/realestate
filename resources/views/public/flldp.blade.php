@extends('public/_layoutProject')

@section('projectName')
    Šírava Park (Eco & Lake Resort)
@endsection

@section('startBody')
    @include('member/modals/parkModal')

    @include('member/modals/drone')
@endsection

@section('projectHeader')
    <img src="{{ asset('images/member/hot/flldp/22.jpg') }}" class="img-fluid mx-auto" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Zemplínska Šírava, Slovak Republic</p>

                    <h3 class="color_primary xs-mb-0">@lang('public/flldp.expected')</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectContent')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">@lang('member/why_invest.title')</h2>

            <p>@lang('member/why_invest.6')</p>

            <p>@lang('member/why_invest.text5')</p>

            <hr class="part primary">

            <div class="row">
                <div class="col-12 col-lg-6">
                    <h3 class="text-center">@lang('member/why_invest.master')</h3>

                    <a href="{{ asset('images/member/arch_' . App::getLocale() . '.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/sm/arch_' . App::getLocale() . '.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>

                    <div class="text-center xs-mt-20">
                        <a href="{{ asset('documents/master_plan_' . App::getLocale() . '.pdf') }}" class="btn btn-primary" target="_blank">@lang('member/why_invest.pdf')</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <h3 class="text-center">@lang('member/why_invest.beach')</h3>

                    <a href="{{ asset('images/member/beach/page.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/beach/page.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>

                    <div class="text-center xs-mt-20">
                        <a href="{{ asset('documents/marina_' . App::getLocale() . '.pdf') }}" class="btn btn-primary" target="_blank">@lang('member/why_invest.beach2')</a>
                    </div>
                </div>
            </div>

            <hr class="part primary">

            <p>@lang('public/flldp.1')</p>

            <p>@lang('public/flldp.2')</p>

            <p>@lang('public/flldp.3')</p>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="text-center xs-mt-20">@lang('member/why_invest.1')</h4>

                    <a href="{{ asset('images/member/houses/apartment_house.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/houses/sm/apartment_house.jpg') }}" class="img-fluid img-thumbnail d-block mx-auto" alt="" data-aos="zoom-in"></a>

                    <p class="text-center xs-mt-10">{!! trans('member/why_invest.1b') !!}</p>
                </div>

                <div class="col-12 col-lg-6">
                    <h4 class="text-center xs-mt-20">@lang('member/why_invest.5')</h4>

                    <a href="{{ asset('images/member/houses/villa.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/houses/sm/villa.jpg') }}" class="img-fluid img-thumbnail d-block mx-auto" alt="" data-aos="zoom-in"></a>

                    <p class="text-center xs-mt-10">{!! trans('member/why_invest.5b') !!}</p>
                </div>

                <div class="col-12 col-lg-4">
                    <h4 class="text-center xs-mt-20">@lang('member/why_invest.2')</h4>

                    <a href="{{ asset('images/member/houses/detached_house.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/houses/sm/detached_house.jpg') }}" class="img-fluid img-thumbnail d-block mx-auto" alt="" data-aos="zoom-in"></a>

                    <p class="text-center xs-mt-10">{!! trans('member/why_invest.2b') !!}</p>
                </div>

                <div class="col-12 col-lg-4">
                    <h4 class="text-center xs-mt-20">@lang('member/why_invest.3')</h4>

                    <a href="{{ asset('images/member/houses/semidetached_house.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/houses/sm/semidetached_house.jpg') }}" class="img-fluid img-thumbnail d-block mx-auto" alt="" data-aos="zoom-in"></a>

                    <p class="text-center xs-mt-10">{!! trans('member/why_invest.3b') !!}</p>
                </div>

                <div class="col-12 col-lg-4">
                    <h4 class="text-center xs-mt-20">@lang('member/why_invest.4')</h4>

                    <a href="{{ asset('images/member/houses/standard_house.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/houses/sm/standard_house.jpg') }}" class="img-fluid img-thumbnail d-block mx-auto" alt="" data-aos="zoom-in"></a>

                    <p class="text-center xs-mt-10">{!! trans('member/why_invest.4b') !!}</p>
                </div>
            </div>

            <div class="text-center xs-mt-20 xs-mb-20">
                <a href="{{ asset('documents/business_plan_' . App::getLocale() . '.pdf') }}" class="btn btn-primary" target="_blank">@lang('member/why_invest.bp')</a>
            </div>

            <hr class="part primary">

            @include('includes/videos/mixed')

            <div class="text-center xs-mt-20">
                <a href="" class="btn btn-primary xs-mb-10" data-toggle="modal" data-target="#parkModal">@lang('member/index.parkVideo')</a>

                <a href="" class="btn btn-secondary xs-mb-10" data-toggle="modal" data-target="#droneModal">@lang('member/index.droneVideo')</a>
            </div>

            <hr class="part primary">

            <h4 class="text-center">@lang('member/why_invest.location')</h4>

            <p>@lang('member/location.text')</p>

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

            <hr class="part primary">

            <h4 class="text-center">@lang('member/why_invest.spa')</h4>

            <p class="xs-mt-20">@lang('member/why_invest.spa1')</p>

            <p>@lang('member/why_invest.spa2')</p>

            <p>@lang('member/why_invest.spa3')</p>

            <a href="{{ asset('images/member/spa.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/sm/spa.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>

            <p class="lead xs-mt-20">@lang('member/location.distance')</p>

            <ul>
                <li>@lang('member/location.1')</li>

                <li>@lang('member/location.2')</li>

                <li>@lang('member/location.3')</li>

                <li>@lang('member/location.4')</li>

                <li>@lang('member/location.5')</li>

                <li>@lang('member/location.6')</li>
            </ul>

            <a href="{{ asset('images/member/hot/flldp/highway.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/highway.jpg') }}" class="img-fluid mx-auto" alt="" data-aos="zoom-in"></a>

            <p class="lead xs-mt-20">@lang('member/location.highway')</p>

            <p>@lang('member/location.text4')</p>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/hYkBf-OIjsI?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="card d-print-none">
        <div class="card-body">
            <h2 class="card-title">@lang('member/projects/strp.map')</h2>

            <div class="embed-responsive embed-responsive-16by9 d-print-none">
                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d37497.43764775952!2d21.976342452157446!3d48.79273176433241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e3!4m3!3m2!1d48.811292599999994!2d22.041712699999998!4m0!5e0!3m2!1sen!2ssk!4v1545398277418" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">@lang('member/projects/strp.info')</h4>

        <p>@lang('member/projects/strp.location') <span class="float-right">Slovak Republic</span></p>

        <p>@lang('member/projects/strp.class') <span class="float-right">@lang('member/projects/strp.class3')</span></p>

        <p>@lang('public/flldp.total') <span class="float-right">&euro; 900 000</span></p>

        <p>@lang('public/flldp.minimum') <br>(2 shares per &euro; 30 000)<span class="float-right">&euro; 60 000</span></p>

        <p>@lang('public/flldp.completion') <span class="float-right">330 %</span></p>

        <p class="xs-mb-0">@lang('member/projects/strp.area') <span class="float-right">150 000 m<sup>2</sup></span></p>
    </div>
@endsection