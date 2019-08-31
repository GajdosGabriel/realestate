@extends('public/_layout2')

@section('title', env('APP_NAME') . 'Self Certification')

@section('content')
    <div class="container">
        <h2 class="xs-mb-20">@lang('cert/index.title')</h2>

        <p class="lead text-center bg_secondary text-uppercase xs-p-20">@lang('cert/index.1')</p>

        <div class="row xs-mt-20 lg-mt-50 xs-mb-20 lg-mb-50">
            <div class="col-12 col-lg-4">
                <h3 class="text-center">@lang('cert/index.hnwi')</h3>

                <p class="text-center">@lang('cert/index.2')</p>

                <div class="text-center">
                    <a href="{{ route('public.certification.hnwi') }}" class="btn btn-primary">@lang('cert/index.sign')</a>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <h3 class="text-center">@lang('cert/index.si')</h3>

                <p class="text-center">@lang('cert/index.3')</p>

                <div class="text-center">
                    <a href="{{ route('public.certification.si') }}" class="btn btn-primary">@lang('cert/index.sign')</a>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <h3 class="text-center">@lang('cert/index.ri')</h3>

                <p class="text-center">@lang('cert/index.4')</p>

                <div class="text-center">
                    <a href="{{ route('public.certification.ri') }}" class="btn btn-primary">@lang('cert/index.sign')</a>
                </div>
            </div>
        </div>

        <p class="text-center lead bg_secondary text-uppercase xs-p-20">@lang('cert/index.5')</p>
    </div>
@endsection