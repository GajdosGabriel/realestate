@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Investment properties')

@section('content')
    <div class="container-fluid bg_grey">
        <div class="container xs-pt-20 xs-pb-20">
            <p class="color_white xs-mb-0">Note: this is only a small part of the real estate investments projects we have in our database, as we can manage any type of real estate investment projects from 100k up till 10 Million and more. Contact us to discuss what type of real estate investment you are looking for in our CEE golden triangle region.</p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row projects bgAlternate">
            <div class="col-12 col-sm-6 col-xl-4">
                <h3 class="text-center">Buy-fix-sell<br><small>Buy-fix-to let</small></h3>

                <img src="{{ asset('images/member/properties/buy-fix-sell/cover_sm.jpg') }}" class="img-fluid mx-auto xs-mt-20 xs-mb-20 lg-mb-50" alt="">

                <p class="textline">Location <span class="float-right">Central Eastern Europe</span></p>

                <p class="textline">Cost of investment <span class="float-right">&euro; 100K to 10M</span></p>

                <p class="textline">Projected equity multiply <span class="float-right">1,4 - 2,0 x</span></p>

                <div class="xs-mt-20 lg-mt-50">
                    <a href="{{ route('member.properties.buy-fix-sell') }}" class="btn btn-secondary">@lang('general.more')</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-4">
                <h3 class="text-center">Bratislava<br><small>Office renovation</small></h3>

                <img src="{{ asset('images/member/properties/bratislava/cover_sm.jpg') }}" class="img-fluid mx-auto xs-mt-20 xs-mb-20 lg-mb-50" alt="">

                <p class="textline">Location <span class="float-right">Slovak Republic</span></p>

                <p class="textline">Cost of investment <span class="float-right">on request</span></p>

                <p class="textline">ROI - project timeframe <span class="float-right">on request</span></p>

                <div class="xs-mt-20 lg-mt-50">
                    <a href="{{ route('member.properties.bratislava') }}" class="btn btn-secondary">@lang('general.more')</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-4">
                <h3 class="text-center">Bratislava<br><small>Residential renovation</small></h3>

                <img src="{{ asset('images/member/properties/bratislava-sell/cover_sm.jpg') }}" class="img-fluid mx-auto xs-mt-20 xs-mb-20 lg-mb-50" alt="">

                <p class="textline">Location <span class="float-right">Slovak Republic</span></p>

                <p class="textline">Cost of investment <span class="float-right">on request</span></p>

                <p class="textline">Projected equity multiply <span class="float-right">on request</span></p>

                <div class="xs-mt-20 lg-mt-50">
                    <a href="{{ route('member.properties.bratislava-sell') }}" class="btn btn-secondary">@lang('general.more')</a>
                </div>
            </div>
        </div>
    </div>
@endsection