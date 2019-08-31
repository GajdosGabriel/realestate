@extends('public/_layout')

@section('title', env('APP_NAME'))

@section('content')
    @include('public/blocks/home')

    @include('public/blocks/project')

    @include('public/blocks/login')

    @include('public/blocks/about')

    @include('public/blocks/news')

    @include('public/blocks/contact')
@endsection