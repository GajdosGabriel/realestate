@extends('public/_layout2')

@section('title', env('APP_NAME'))

@section('content')
    <div class="container xs-pt-20 lg-pt-50 xs-pb-20 lg-pb-50">
        @include('includes/videos/howItWorks')
    </div>
@endsection