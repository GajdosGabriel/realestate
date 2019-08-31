@extends('member/_layoutProject')

@section('projectCategory')
    Realized projects
@endsection

@section('projectName')
    Houseboat on Danube project
@endsection

@section('projectHeader')
    <a href="{{ route('member.realized.home') }}" class="link"><i class="fas fa-angle-left"></i> Back to Realized projects</a>

    <img src="{{ asset('images/member/realized/houseboat-on-danube/cover.jpg') }}" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Bratislava, Slovak Republic</p>

                    <h3 class="color_primary xs-mb-0">Realized ROI 29%</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectContent')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Photos</h2>

            <a href="{{ asset('images/member/realized/houseboat-on-danube/houseboat-on-danube-3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/houseboat-on-danube/houseboat-on-danube-3.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>

            <div class="row xs-mt-20">
                <div class="col-6">
                    <a href="{{ asset('images/member/realized/houseboat-on-danube/houseboat-on-danube-1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/houseboat-on-danube/houseboat-on-danube-1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-6">
                    <a href="{{ asset('images/member/realized/houseboat-on-danube/houseboat-on-danube-2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/houseboat-on-danube/houseboat-on-danube-2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card d-print-none">
        <div class="card-body">
            <h2 class="card-title">Map</h2>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65783.03217249435!2d17.104790987933765!3d48.07282840484772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8817dd025bb9%3A0x7bd857f5edcadf70!2sJaroveck%C3%A9+rameno!5e0!3m2!1sen!2ssk!4v1530869260002" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">Investment information</h4>

        <p>Location <span class="float-right">Slovak Republic</span></p>

        <p>Asset class <span class="float-right">New developments</span></p>

        <p>Area <span class="float-right">100 m<sup>2</sup></span></p>
    </div>

    <a href="" class="btn btn-block btn-primary" data-toggle="modal" data-target="#projectContactModal">Request more info</a>
@endsection