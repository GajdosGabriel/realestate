@extends('public/_layout2')

@section('title', env('APP_NAME') . 'Self Certification - Restricted Investor')

@section('content')
    <div class="container">
        <h2>@lang('cert/ri.1')</h2>

        <p>@lang('cert/ri.2')</p>

        <p>@lang('cert/ri.3')</p>

        <p>@lang('cert/ri.4')</p>

        <p>@lang('cert/ri.5')</p>

        <p>@lang('cert/ri.6')</p>

        <p>@lang('cert/ri.7')</p>

        <p>@lang('cert/ri.8')</p>

        <p>@lang('cert/ri.9')</p>

        <p>@lang('cert/ri.10')</p>

        <p>@lang('cert/ri.11')</p>

        <p>@lang('cert/ri.12')</p>

        <form action="{{ route('public.certification.submit') }}" method="POST" class="cee bg_secondary xs-p-20">
            @include('includes/errorList')

            @csrf

            <input type="hidden" name="type" value="RESTRICTED INVESTOR">

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