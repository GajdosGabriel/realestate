<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/b4helper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/xs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sm.css') }}" media="(min-width:576px)">
    <link rel="stylesheet" href="{{ asset('css/md.css') }}" media="(min-width:768px)">
    <link rel="stylesheet" href="{{ asset('css/lg.css') }}" media="(min-width:992px)">
    <link rel="stylesheet" href="{{ asset('css/xl.css') }}" media="(min-width:1200px)">
    <script defer src="https://use.fontawesome.com/releases/v5.0.12/js/all.js"
            integrity="sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR" crossorigin="anonymous"></script>
    <title>CEE Real Estate Group</title>
</head>

<body>

<div class="container text-center xs-pt-20 lg-pt-50">
    <img src="{{ asset('images/logo-sm.png') }}" class="img-fluid d-block mx-auto" alt="">

    <hr class="part primary">

    <h1 class="xs-mt-20">@lang('exception.1')</h1>

    <p class="lead">@lang('exception.2')</p>

    <p>@lang('exception.3') <a href="mailto:info@cee-realestate.com">info@cee-realestate.com</a> @lang('exception.4')</p>

    <hr class="part primary">

    <a href="{{ route('public.home') }}" class="lead">@lang('exception.5')</a> @lang('exception.6') <a href="{{ route('public.home') }}" class="lead">@lang('exception.7')</a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>
</html>