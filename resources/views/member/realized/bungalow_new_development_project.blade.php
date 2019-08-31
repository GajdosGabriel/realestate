@extends('member/_layoutProject')

@section('projectCategory')
    Realized projects
@endsection

@section('projectName')
    Bungalow new development project
@endsection

@section('projectHeader')
    <a href="{{ route('member.realized.home') }}" class="link"><i class="fas fa-angle-left"></i> Back to Realized projects</a>

    <img src="{{ asset('images/member/realized/bungalow_new_development_project/cover.jpg') }}" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">This bungalow can be placed on any plot in the CEE region</p>

                    <h3 class="color_primary xs-mb-0">Realized ROI 30%</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectContent')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Photos</h2>

            <a href="{{ asset('images/member/realized/bungalow_new_development_project/low-budget-bungalow-3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/bungalow_new_development_project/low-budget-bungalow-3.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>

            <div class="row xs-mt-20">
                <div class="col-6">
                    <a href="{{ asset('images/member/realized/bungalow_new_development_project/low-budget-bungalow-1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/bungalow_new_development_project/low-budget-bungalow-1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-6">
                    <a href="{{ asset('images/member/realized/bungalow_new_development_project/low-budget-bungalow-2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/bungalow_new_development_project/low-budget-bungalow-2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card d-print-none">
        <div class="card-body">
            <h2 class="card-title">Map</h2>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46935.040552086386!2d20.175399079837103!3d49.07907598376698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473e2604d0ba7351%3A0x825682ba5d743b20!2zQXBhcnRtw6FueSDEjGVyZcWhxYhvdsO9IHNhZA!5e0!3m2!1sen!2ssk!4v1528461337714" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">Investment information</h4>

        <p>Location <span class="float-right">CEE region</span></p>

        <p>Asset class <span class="float-right">New developments</span></p>

        <p>Area <span class="float-right">111 m<sup>2</sup></span></p>
    </div>

    <a href="" class="btn btn-block btn-primary" data-toggle="modal" data-target="#projectContactModal">Request more info</a>
@endsection