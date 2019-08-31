@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - New developments - Panenské Břežany - Development')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'New developments / Panenské Břežany Development'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/developments/brezany/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>Panenské Břežany <small>Development</small></h1>

                <p class="lead">Czech Republic</p>
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

                                    <p>An architectural study for the construction of six separate family houses with impressive architecture designed by architect Pavel Fanta belongs to this offer of land in the Panenske Brezany village with excellent accessibility to Prague.</p>

                                    <p>The land is located in the center of the village. The total area of ​​the land is 4 936 m2. On the plot is the original water supply and electricity connection and a planning consent has already been issued for connection of three houses to the distribution system.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Parameters of land</h3>

                                    <p>The total area of the plot is 4.936 m2, Land is free of legal defects.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media xs-mb-20 lg-mb-30">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Possible land use</h3>

                                    <p>CEE Real Estate Group buy, build and manage it for you. Projects with 6 houses and ready architectural study and building permission, houses could be offered in pre-sales.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media xs-mb-20 lg-mb-30">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Distance</h3>

                                    <ul>
                                        <li>City of Prague with International Airport (15 km)</li>
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
                                        <li>airport: available – 15 km (Prague International Airport)</li>
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
                                    <p>Bricks in combination with a wooden lining. Energy savings can be increased by placing of solar collectors. The project proposes a layout solution in the form of a multifunctional living space with a kitchenette, with direct access to the garden. Furthermore, the ground floor includes a walk-in closet, hygienic area and a guest / study room. Upstairs there will be three bedrooms with bathrooms and walk-in closets, a parking space in the basement, utility room and a storage area.</p>

                                    <p>The dominant of the village is a large castle park, the village lies at the edge of the forest. There is a kindergarten, basic school, grocery and a child´s playground. A suburban bus takes 22 minutes to reach the Kobylisy metro station (line C), 15 minutes by car to Prague.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Photos</h2>

                            <a href="{{ asset('images/member/developments/brezany/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/developments/brezany/sm/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/developments/brezany/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/developments/brezany/sm/1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/developments/brezany/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/developments/brezany/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/developments/brezany/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/developments/brezany/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card d-print-none">
                        <div class="card-body">
                            <h2 class="card-title">Map</h2>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10211.955870000837!2d14.435297948696764!3d50.21742662110114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470be995f38c90cd%3A0x69891ecee0c85c8!2zMjUwIDcwIFBhbmVuc2vDqSBCxZllxb5hbnksIEN6ZWNoaWE!5e0!3m2!1sen!2ssk!4v1528378593181" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock">
                        <div class="info bg_grey">
                            <h4 class="title text-center">Investment information</h4>

                            <p>Location <span class="float-right">Czech Republic</span></p>

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