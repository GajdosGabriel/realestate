@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Land investments - Zemplínska Šírava - Sell to developer')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'New developments / Zemplínska Šírava Sell to developer'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/land/sirava2/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>Zemplínska Šírava <small>Sell to developer</small></h1>

                <p class="lead">Slovak Republic</p>
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

                                    <p>The land is located in the cadastral area of Koločov, in an attractive recreation area of Lake Zemplínska Šírava, about 50 meters from the lake side, in the east of Slovakia, with a wide range of possibilities of its use.</p>
                                </div>
                            </div>

                            <div class="embed-responsive embed-responsive-16by9 d-print-none">
                                @include('member/land/videos/sirava')
                            </div>

                            <div class="media xs-mt-20">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <p>Zemplínska Šírava is the second largest body of water in Slovak Republic (33.5 km2) and is the twelfth largest lake in Europe. It is known for the largest number of sunny and tropical days within the year.
                                        It is located in the immediate vicinity of Michalovce district (40 k inhabitants) and 50km from the second largest city in Slovakia - Košice (250 k inhabitants) with the Košice international airport.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media xs-mb-20 lg-mb-30">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Parameters of land</h3>

                                    <p>The total area of the plot is 366.224m2, registered as permanent grassland.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media xs-mb-20 lg-mb-30">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Possible land use</h3>

                                    <p>The purchase of the land, the application for the general building permission and the sale to real estate developer, hotel group or holiday cottages parks.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media xs-mb-20 lg-mb-30">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Distance</h3>

                                    <ul>
                                        <li>The city of Košice with the International Airport (55km)</li>
                                        <li>The town of Michalovce (9km)</li>
                                        <li>Border crossing Slovenské Nové Mesto - Sátoraljaújhely (HU) (50km)</li>
                                        <li>Border crossing Vyšné Nemecké - Uzhhorod (UA) (24km)</li>
                                        <li>Border crossing Vyšný Komárnik - Barwinek (PL) (70km)</li>
                                    </ul>
                                </div>
                            </div>

                            <hr>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Infrastructure & Facilities</h3>

                                    <ul>
                                        <li>Direct access to 4-lane motorway</li>
                                        <li>Airport: availability - 55km (Kosice International Airport - KSC)</li>
                                        <li>Cooking gas: available</li>
                                        <li>Electricity: available</li>
                                        <li>Running water: available</li>
                                        <li>Sewerage: available</li>
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
                                    <p>Zemplínska šírava is with the area of 33 km² the second largest water dam in Slovak Republic. Its average depth is 3.5 m, the maximum length is 11 km and the maximum width is 3.5 km. The dam is mainly used for recreational purposes and flood protection. It has become a popular recreational center. There are up to 7 holiday resorts with their own beaches and swimming pools. In 2014, all year-round aquapark facility was built in Kaluža. Visitors can also enjoy the "artificial waves" in the water park. Water sports are also widely popular. Water scooters, boats and surfboards can be rented here.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Photos</h2>

                            <div>
                                <a href="{{ asset('images/member/land/sirava/sirava_area.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/land/sirava/sirava_area.jpg') }}" class="img-fluid mx-auto" alt=""></a>
                            </div>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/land/sirava/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/land/sirava/sm/1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/land/sirava/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/land/sirava/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/land/sirava/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/land/sirava/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card d-print-none">
                        <div class="card-body">
                            <h2 class="card-title">Map</h2>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42035.16588016758!2d22.00095202396911!3d48.80199696011747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDjCsDQ4JzQyLjkiTiAyMsKwMDInMTcuMiJF!5e0!3m2!1sen!2ssk!4v1528197965280"frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock">
                        <div class="info bg_grey">
                            <h4 class="title text-center">Investment information</h4>

                            <p>Location <span class="float-right">Slovak Republic</span></p>

                            <p>Asset class <span class="float-right">Land investment</span></p>

                            <p>Cost of investment <span class="float-right">on request</span></p>

                            <p>Projected equity multiply <span class="float-right">on request</span></p>

                            <p>Area <span class="float-right">366 324 m<sup>2</sup></span></p>
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