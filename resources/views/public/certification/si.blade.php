@extends('public/_layout2')

@section('title', env('APP_NAME') . 'Self Certification - Sophisticated Investor')

@section('content')
    <div class="container">
        <h2>@lang('cert/si.1')</h2>

        <p>@lang('cert/si.2')</p>

        <p>@lang('cert/si.3')</p>

        <ol>
            <li>@lang('cert/si.4')</li>

            <li>@lang('cert/si.5')</li>

            <li>@lang('cert/si.6')</li>

            <li>
                @lang('cert/si.7')

                <ol type="i">
                    <li>@lang('cert/si.8')</li>

                    <li>@lang('cert/si.9')</li>
                </ol>
            </li>

            <li>@lang('cert/si.10')</li>
        </ol>

        <p>@lang('cert/si.11')</p>

        <ol>
            <li>@lang('cert/si.12')</li>

            <li>@lang('cert/si.13')</li>

            <li>@lang('cert/si.14')</li>

            <li>@lang('cert/si.15')</li>
        </ol>

        <p>@lang('cert/si.16')</p>

        <p>@lang('cert/si.17')</p>

        <form action="{{ route('public.certification.submit') }}" method="POST" class="cee bg_secondary xs-p-20">
            @include('includes/errorList')

            @csrf

            <input type="hidden" name="type" value="SOPHISTICATED INVESTOR">

            <div class="form-group row">
                <label for="full_name" class="col-md-4 col-form-label text-md-right">@lang('form.fullName')</label>

                <div class="col-md-6">
                    <input id="full_name" type="text" class="form-control{{ $errors->has('full_name') ? ' is-invalid' : '' }}" name="full_name" value="{{ old('full_name') }}" minlength="5" maxlength="80" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">@lang('form.email')</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">@lang('form.submit')</button>
            </div>
        </form>
    </div>
@endsection