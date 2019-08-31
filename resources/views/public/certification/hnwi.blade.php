@extends('public/_layout2')

@section('title', env('APP_NAME') . 'Self Certification - High Net Worth Individual')

@section('content')
    <div class="container">
        <h2>@lang('cert/hnwi.1')</h2>

        <p>@lang('cert/hnwi.2')</p>

        <p>@lang('cert/hnwi.3')</p>

        <ol>
            <li>@lang('cert/hnwi.4')</li>

            <li>@lang('cert/hnwi.5')</li>

            <li>@lang('cert/hnwi.6')</li>

            <li>@lang('cert/hnwi.7')</li>

            <li>@lang('cert/hnwi.8')</li>
        </ol>

        <p>@lang('cert/hnwi.9')</p>

        <ol>
            <li>@lang('cert/hnwi.10')</li>

            <li>@lang('cert/hnwi.11')</li>
        </ol>

        <p>@lang('cert/hnwi.12')</p>

        <p>@lang('cert/hnwi.13')</p>

        <form action="{{ route('public.certification.submit') }}" method="POST" class="cee bg_secondary xs-p-20">
            @include('includes/errorList')

            @csrf

            <input type="hidden" name="type" value="HIGH NET WORTH INDIVIDUAL">

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