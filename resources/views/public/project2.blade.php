@extends('member/_layout')

@section('title', env('APP_NAME') . ' - Project 2')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'Project 2'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/project2/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>Project 2</h1>

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
                            <h2 class="card-title">Plans</h2>

                            <div>
                                <a href="{{ asset('images/member/project2/plans/0.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/plans/sm/0.jpg') }}" class="img-fluid mx-auto" alt=""></a>
                            </div>

                            <div class="row xs-mt-20">
                                <div class="col-3">
                                    <a href="{{ asset('images/member/project2/plans/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/plans/sm/1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-3">
                                    <a href="{{ asset('images/member/project2/plans/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/plans/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-3">
                                    <a href="{{ asset('images/member/project2/plans/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/plans/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-3">
                                    <a href="{{ asset('images/member/project2/plans/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/plans/sm/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Photos</h2>

                            <h4>Exterior</h4>

                            <div>
                                <a href="{{ asset('images/member/project2/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/1.jpg') }}" class="img-fluid mx-auto w-100" alt=""></a>
                            </div>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>

                            <div class="row xs-mt-20">
                                <div class="col-3">
                                    <a href="{{ asset('images/member/project2/5.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/sm/5.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-3">
                                    <a href="{{ asset('images/member/project2/6.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/sm/6.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-3">
                                    <a href="{{ asset('images/member/project2/7.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/7.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-3">
                                    <a href="{{ asset('images/member/project2/8.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/8.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>

                            <h4 class="xs-mt-20">Interior</h4>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/9.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/9.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/10.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/10.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/11.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/11.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/12.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/12.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/13.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/13.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/14.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/14.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/15.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/sm/15.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/16.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/sm/16.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/17.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/sm/17.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/18.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/sm/18.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/19.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/sm/19.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/project2/20.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/project2/sm/20.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<div class="card d-print-none">--}}
                        {{--<div class="card-body">--}}
                            {{--<h2 class="card-title">Map</h2>--}}

                            {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.9992347593256!2d17.102526316068836!3d48.14881997922441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c895bcf2e58d7%3A0xce7fc292ae8ecad2!2sPalis%C3%A1dy+731%2F40%2C+811+06+Bratislava!5e0!3m2!1sen!2ssk!4v1534494298378" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock">
                        <div class="info bg_grey">
                            <h4 class="title text-center">Investment information</h4>

                            <p>Location <span class="float-right">Bratislava, Slovak Republic</span></p>

                            <p>Asset class <span class="float-right">Investment properties</span></p>

                            {{--<p>Cost of investment <span class="float-right">&euro; </span></p>--}}

                            <p>Projected equity multiply <span class="float-right">on request</span></p>

                            <p>Area <span class="float-right">783 m<sup>2</sup></span></p>
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