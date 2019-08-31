@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Land investments - Budapest - Land investment')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'Land investments / Budapest Land investment'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/land/budapest/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>Budapest <small>Land investment</small></h1>

                <p class="lead">Hungary</p>
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
                                    <h3>Location</h3>

                                    <p>Budapest, XXII It lies on the karst surface Tétényi plateau and its slopes on the Danube, consisting of dolomite and limestone, forming the southern outskirts of the Buda hills . Its loose soil cover was excellent for the vineyard cultivation. The plateau near Kamaraerdő is a habitat for many rare plant and animal species. Háros Island is a nature conservation area with its untouched floodplain forests.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media xs-mb-20 lg-mb-30">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Parameters of land</h3>

                                    <p>The total area of the plot is 43.430 m2, Agricultural land.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media xs-mb-20 lg-mb-30">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Possible land use</h3>

                                    <p>Purchase of the land, apply for distribution in the cadaster for 25 parcels and build basic infrastructure to the parcels and subsequent individual land sales.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media xs-mb-20 lg-mb-30">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Distance</h3>

                                    <ul>
                                        <li>City of Budapest with International Airport</li>
                                    </ul>
                                </div>
                            </div>

                            <hr>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Infrastructure</h3>

                                    <ul>
                                        <li>path: direct access to the 2-stream main road</li>
                                        <li>airport: available – 10 km (Budapest International Airport)</li>
                                        <li>gas: available</li>
                                        <li>electricity: available</li>
                                        <li>water: available</li>
                                        <li>sewerage: available</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Market summary</h2>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <p>Budapest XXII. keruelet is a city found in Budapest, Hungary. It is located 47.43 latitude and 19.04 longitude, and it is situated at elevation 104 meters above sea level.</p>

                                    <p>Budapest XXII. keruelet has a population of 50,499 making it the 20th biggest city in Budapest. It operates on the CEST time zone, which means that it follows the same time zone as Budapest.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Photos</h2>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <img src="{{ asset('images/member/land/budapest/1.jpg') }}" class="img-fluid d-block mx-auto" alt="">
                                </div>

                                <div class="col-4">
                                    <img src="{{ asset('images/member/land/budapest/2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
                                </div>

                                <div class="col-4">
                                    <img src="{{ asset('images/member/land/budapest/3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card d-print-none">
                        <div class="card-body">
                            <h2 class="card-title">Map</h2>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d15134.91342256305!2d18.98992094554153!3d47.40290018793051!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741e71c1349768f%3A0x500c4290c1ed690!2sBudapest%2C+District+XXII.%2C+1222+Hungary!5e1!3m2!1sen!2ssk!4v1528380912243" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock">
                        <div class="info bg_grey">
                            <h4 class="title text-center">Investment information</h4>

                            <p>Location <span class="float-right">Hungary</span></p>

                            <p>Asset class <span class="float-right">Land investment</span></p>

                            <p>Cost of investment <span class="float-right">on request</span></p>

                            <p>Projected equity multiply <span class="float-right">on request</span></p>

                            <p>Area <span class="float-right">43 430 m<sup>2</sup></span></p>
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