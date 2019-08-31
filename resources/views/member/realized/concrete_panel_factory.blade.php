@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Realized projects - Concrete panel factory')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'Realized projects / Concrete panel factory'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <a href="{{ route('member.realized.home') }}" class="link"><i class="fas fa-angle-left"></i> Back to Realized projects</a>

        <img src="{{ asset('images/member/realized/concrete-panel-factory/cover.jpg') }}" alt="">

        <div class="name">
            <div class="container">
                <h1>Concrete panel factory - 37% ROI</h1>

                <p class="lead">Bratislava, Slovak Republic</p>
            </div>
        </div>
    </div>

    <div class="bg_fortiary xs-pt-20 xs-pb-20 lg-pt-30 lg-pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 project-details">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Photos</h2>
													
														<a href="{{ asset('images/member/realized/concrete-panel-factory/concreate-panel-factory-3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/concrete-panel-factory/concreate-panel-factory-3.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>

                            <div class="row xs-mt-20">
                                <div class="col-6">
                                    <a href="{{ asset('images/member/realized/concrete-panel-factory/concreate-panel-factory-1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/concrete-panel-factory/concreate-panel-factory-1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-6">
                                    <a href="{{ asset('images/member/realized/concrete-panel-factory/concreate-panel-factory-2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/concrete-panel-factory/concreate-panel-factory-2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                
                            </div>
                        </div>
                    </div>

                    <div class="card d-print-none">
                        <div class="card-body">
                            <h2 class="card-title">Map</h2>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16660.930817415338!2d17.20515955144718!3d48.146911138050996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c86037446c76f%3A0x54c62649f6234618!2s821+07+Vraku%C5%88a!5e0!3m2!1sen!2ssk!4v1530868976614" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock">
                        <div class="info bg_grey">
                            <h4 class="title text-center">Investment information</h4>

                            <p>Location <span class="float-right">Slovak Republic</span></p>

                            <p>Asset class <span class="float-right">New developments</span></p>

                            <p>Area <span class="float-right">22 500 m<sup>2</sup></span></p>
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