@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Hot projects - Lab family houses')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'Hot projects / Lab family houses'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/hot/lab/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>Lab family houses</h1>

                <p class="lead">Lab, Slovak Republic</p>
            </div>
        </div>
    </div>

    <div class="bg_fortiary xs-pt-20 xs-pb-20 lg-pt-30 lg-pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 project-details">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Key deal points</h2>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <p>Sale price with Building permits for all infrastructure Valid and enforceable.</p>

                                    <p>Share acquisition of SPV, which owns all permits and land.</p>

                                    <p>Land is without mortgage.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Photos</h2>

                            <div>
                                <a href="{{ asset('images/member/hot/lab/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/lab/sm/1.jpg') }}" class="img-fluid w-100 mx-auto" alt=""></a>
                            </div>

                            <div class="row xs-mt-20">
                                <div class="col-6">
                                    <a href="{{ asset('images/member/hot/lab/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/lab/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-6">
                                    <a href="{{ asset('images/member/hot/lab/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/lab/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-6 xs-mt-20">
                                    <a href="{{ asset('images/member/hot/lab/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/lab/sm/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-6 xs-mt-20">
                                    <a href="{{ asset('images/member/hot/lab/5.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/lab/sm/5.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card d-print-none">
                        <div class="card-body">
                            <h2 class="card-title">Map</h2>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42415.05897445468!2d16.925041829934624!3d48.36165378583953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476ce9391218c787%3A0x400f7d1c6970080!2s900+67+L%C3%A1b!5e0!3m2!1sen!2ssk!4v1533021643419" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock">
                        <div class="info bg_grey">
                            <h4 class="title text-center">Investment information</h4>

                            <p>Location <span class="float-right">Lab, Slovak Republic</span></p>

                            <p>Asset class <span class="float-right">New developments</span></p>

                            <p>Cost of investment <span class="float-right">on request</span></p>

                            <p>Projected equity multiply <span class="float-right">on request</span></p>

                            <p>Area <span class="float-right">26 400 m<sup>2</sup></span></p>
                        </div>

                        <a href="" class="btn btn-block btn-primary xs-mb-20" data-toggle="modal" data-target="#projectContactModal">Request more info</a>

                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-block btn-secondary" onclick="window.print();"><i class="fas fa-print"></i> Print</button>
                            </div>

                            <div class="col-6">
                                <a href="" class="btn btn-block btn-secondary"><i class="fas fa-download"></i> PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('endBody')
    <a id="arrowUp" href="#memberNavbar" class="internal d-none d-lg-block" title="Scroll up!"><i class="fa fa-arrow-up"></i></a>
@endsection