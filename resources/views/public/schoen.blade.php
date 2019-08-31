@extends('public/_layoutProject')

@section('title', env('APP_NAME') . ' - Schon building')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'Schon building'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/pub/schon/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>Schon building</h1>

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
                            {{--<h2 class="card-title">header</h2>--}}

                            {{--<p>text</p>--}}

                            {{--<hr class="part primary">--}}

                            <h2>Photos</h2>

                            <div class="row xs-mt-20">
                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/1.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/sm/1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/2.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/3.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>

                            <h2 class="xs-mt-20">Current floor plans</h2>

                            <div class="row xs-mt-20">
                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/old_plans/1.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/old_plans/sm/1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/old_plans/2.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/old_plans/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/old_plans/3.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/old_plans/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>

                            <div class="text-center xs-mt-20">
                                <a href="{{ asset('documents/schon_plans.pdf') }}" class="btn btn-primary" target="_blank">View full floor plans PDF</a>
                            </div>

                            <hr class="part primary">

                            <h2>Renovation plan</h2>

                            <div class="row xs-mt-20">
                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/visualisations/1.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/visualisations/sm/1.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/visualisations/2.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/visualisations/sm/2.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/visualisations/3.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/visualisations/sm/3.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>
                            
                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/visualisations/4.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/visualisations/sm/4.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/visualisations/5.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/visualisations/sm/5.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/visualisations/6.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/visualisations/sm/6.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>
                            
                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/visualisations/7.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/visualisations/sm/7.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/visualisations/8.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/visualisations/sm/8.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/visualisations/9.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/visualisations/sm/9.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>
                            </div>

                            <h2 class="xs-mt-20">Future floor plans</h2>

                            <div class="row xs-mt-20">
                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/plans/1.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/plans/sm/1.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/plans/2.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/plans/sm/2.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/plans/3.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/plans/sm/3.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/plans/4.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/plans/sm/4.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/plans/5.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/plans/sm/5.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/plans/6.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/plans/sm/6.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/plans/7.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/plans/sm/7.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/plans/8.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/plans/sm/8.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/plans/9.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/plans/sm/9.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/plans/10.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/plans/sm/10.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <a href="{{ asset('images/pub/schon/plans/11.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/schon/plans/sm/11.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card d-print-none">
                        <div class="card-body">
                            <h2 class="card-title">Map</h2>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1826.6680953275738!2d17.107534150950812!3d48.146585591594125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e3!4m0!4m3!3m2!1d48.1464299!2d17.108261!5e0!3m2!1sen!2ssk!4v1548150383685" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock">
                        <div class="info bg_grey">
                            <h4 class="title text-center">Investment information</h4>

                            <p>Location <span class="float-right">Bratislava, Slovak Republic</span></p>

                            <p>Asset class <span class="float-right">Investment properties</span></p>

                            <p>Gross Living Area (GLA) <span class="float-right"> 3312,21 m<sup>2</sup></span></p>

                            <p class="xs-mb-0">Gross Building Area (GBA) <span class="float-right"> 4020,35 m<sup>2</sup></span></p>

                        </div>

                        <button class="btn btn-block btn-secondary" onclick="window.print();"><i class="fas fa-print"></i> Print</button>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection