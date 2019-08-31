@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area / Partner program - Facebook banners')

@section('content')
    <div class="container xs-pt-20 xs-pb-20">
        <a href="{{ route('member.partner.marketing-materials.home') }}"><- @lang('member/partner/marketing.back')</a>

        <h1 class="color_primary xs-mt-20">@lang('member/partner/marketing.fb')</h1>

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">1200x628a</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-stvorka-tab" data-toggle="pill" href="#pills-stvorka" role="tab" aria-controls="pills-stvorka" aria-selected="false">1200x628b</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">600x315a</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">600x315b</a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                <img src="{{ asset('banners/fb/1200x628a.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt="">

                <div class="text-center">
                    <a href="{{ asset('banners/fb/1200x628a.jpg') }}" class="btn btn-primary" download>@lang('member/partner/marketing.downloadImage')</a>
                </div>

            </div>

            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <img src="{{ asset('banners/fb/600x315a.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt="">

                <div class="text-center">
                    <a href="{{ asset('banners/fb/600x315a.jpg') }}" class="btn btn-primary" download>@lang('member/partner/marketing.downloadImage')</a>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <img src="{{ asset('banners/fb/600x315b.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt="">

                <div class="text-center">
                    <a href="{{ asset('banners/fb/600x315b.jpg') }}" class="btn btn-primary" download>@lang('member/partner/marketing.downloadImage')</a>
                </div>

            </div>

            <div class="tab-pane fade" id="pills-stvorka" role="tabpanel" aria-labelledby="pills-stvorka-tab">

                <img src="{{ asset('banners/fb/1200x628b.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt="">

                <div class="text-center">
                    <a href="{{ asset('banners/fb/1200x628b.jpg') }}" class="btn btn-primary" download>@lang('member/partner/marketing.downloadImage')</a>
                </div>

            </div>
        </div>

    </div>


    {{--AK sa rozlišovalo sk a en language--}}

    {{--@if(App::getLocale() == 'sk')--}}
        {{--<a href="{{ asset('banners/fb/sk/sirava2.jpg') }}" class="btn btn-primary" download>@lang('member/partner/marketing.downloadImage')</a>--}}
    {{--@else--}}
        {{--<a href="{{ asset('banners/fb/sirava2.jpg') }}" class="btn btn-primary" download>@lang('member/partner/marketing.downloadImage')</a>--}}
    {{--@endif--}}
@endsection