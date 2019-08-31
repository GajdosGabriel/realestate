@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - New developments - Kitsee - Development')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'New developments / Kitsee Development'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/developments/kittsee/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>Kitsee <small>Development</small></h1>

                <p class="lead">Austria</p>
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

                                    <p>A unique plot of land on the shore of Lake See park in Kittsee, Austria. The land is 626 m2, the land belongs to common parts (access road, green areas and water area). The land is unique by the view of Bratislava Castle. has a rectangular shape, the approximate dimensions are 13 x 48 m.</p>

                                    <p>The land is intended for the construction of a family house - the building can be according to local regulations with two above-ground floors, with a straight roof and a light façade.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Parameters of land</h3>

                                    <p>The total area of the plot is 626m2, registered as permanent grassland before.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media xs-mb-20 lg-mb-30">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Possible land use</h3>

                                    <p>Purchase of the land, construction of a family house - the building can be according to local regulations with two above-ground floors, with a straight roof and a light facade.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media xs-mb-20 lg-mb-30">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Distance</h3>

                                    <ul>
                                        <li>City Vienna with International Airport (50-30km)</li>
                                        <li>Town of Bratislava (9km)</li>
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
                                        <li>airport: available - 30km (Vienna International Airport)</li>
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
                                    <p>Kittsee has 3160 inhabitants. Kittsee has an excellent infrastructure - there is a kindergarten, a school, a pharmacy, a hospital, doctors, banks, a post office, a gas station, excellent shopping opportunities. In the immediate vicinity there are several opportunities for nature, bicycle paths and a castle.</p>

                                    <p>Additional fees are due to the property: 3,5% tax on the purchase of the property, 1,1% fee for the catastrophe and 2% fee for notary services. The Commission's commission is 3%.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Photos</h2>

                            <div>
                                <a href="{{ asset('images/member/developments/kittsee/5.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/developments/kittsee/sm/5.jpg') }}" class="img-fluid mx-auto" alt=""></a>
                            </div>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/developments/kittsee/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/developments/kittsee/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/developments/kittsee/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/developments/kittsee/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/developments/kittsee/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/developments/kittsee/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card d-print-none">
                        <div class="card-body">
                            <h2 class="card-title">Map</h2>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10660.491193911237!2d17.05623149776601!3d48.0885726175118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c6200e32f49a5%3A0xd2c42b2df4d93661!2s2421+Kittsee%2C+Austria!5e0!3m2!1sen!2ssk!4v1528295391181" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock">
                        <div class="info bg_grey">
                            <h4 class="title text-center">Investment information</h4>

                            <p>Location <span class="float-right">Austria</span></p>

                            <p>Asset class <span class="float-right">New developments</span></p>

                            <p>Cost of investment <span class="float-right">on request</span></p>

                            <p>Projected equity multiply <span class="float-right">on request</span></p>

                            <p>Area <span class="float-right">626 m<sup>2</sup></span></p>
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