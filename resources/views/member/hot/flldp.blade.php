@extends('member/_layoutProject')

@section('projectCategory')
    Hot projects
@endsection

@section('projectName')
    First-line lake development project
@endsection

@section('projectHeader')
    <img src="{{ asset('images/member/hot/flldp/cover.jpg') }}" class="img-fluid mx-auto" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Zemplínska Šírava, Slovak Republic</p>

                    <h3 class="color_primary xs-mb-0">Expected ROI 55-75%, 12-24 months</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectContent')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Key deal points</h2>

            <p>Choose <strong>Title deed ownership</strong> to invest in this project.</p>

            <p class="text-danger">Full case study will be available approximately in 7 weeks.</p>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Location</h3>

                    <p>The land is located in the cadastral area of Koločov, in an attractive recreation area Zemplínska Šírava, about 50 meters from the water, in the east of Slovakia, with a wide possibility of its use.</p>
                </div>
            </div>

            <div class="embed-responsive embed-responsive-16by9 d-print-none">
                <iframe src="https://www.youtube.com/embed/mrWz4v3Or1I?rel=0" allowfullscreen></iframe>
            </div>

            <div class="media xs-mt-20">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>Zemplínska Šírava is the second largest water area in the Slovak Republic (33,5 km<sup>2</sup>) and is the twelfth largest lake area in Europe. Zemlinska Šírava is known for the largest number of sunny and tropical days in the year.
                        It is located in the immediate vicinity of Michalovce district (40.tis inhabitants) and 50km from the second largest city in the Slovak Republic Košice (250.tis inhabitants) with Kosice international airport.</p>
                </div>
            </div>

            <hr>

            <div class="media xs-mb-20 lg-mb-30">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Parameters of land</h3>

                    <p>The total area of the plot is 366 224 m<sup>2</sup>, registered as permanent grassland.</p>
                </div>
            </div>

            <hr>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Possible land use</h3>

                    <p>Purchase of the land and divide in 10 to 15 smaller parcels to sell to different investors who can create their own developments like: housing projects, commercial real estate and recreation real estate projects.</p>
                </div>
            </div>

            <a href="{{ asset('images/member/hot/flldp/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/1.jpg') }}" class="img-fluid w-100" alt=""></a>

            <hr>

            <div class="media xs-mb-20 lg-mb-30">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Distance</h3>

                    <ul>
                        <li>City Kosice with International Airport (55km)</li>
                        <li>Arrival to Klokočov village after a 4-way journey from Michalovce</li>
                        <li>Town of Michalovce (9km)</li>
                        <li>border crossing Slovenské Nové Mesto - Sátoraljaújhely (50km) (HU)</li>
                        <li>border crossing Vyšné Nemecké - Uzhhorod (24km) (UA)</li>
                        <li>border crossing Vyšný Komárnik - Barwinek (70km) (PL) </li>
                    </ul>
                </div>
            </div>

            <hr>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Infrastructure</h3>

                    <ul>
                        <li>path: direct access to the 4-stream main road</li>
                        <li>airport: available - 55km (Kosice International Airport - KSC)</li>
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
                    <p>Zemplínska šírava is with the area of 33 km² the second largest water dam in the Slovak Republic. Its average depth is 3,5 m, the maximum length is 11 km and the maximum width is 3,5 km. The dam is mainly used for recreational purposes and for flood protection. It has become a popular recreation center. There are up to 7 holiday resorts with its own beaches and swimming pools. In 2014, a modern aquapark with year-round operation was built in Kaluža. Visitors can also enjoy the "artificial waves" in the water park. Water sports are also popular. Water scooters, boats and surfboards can be rented here.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Photos</h2>

            <div>
                <a href="{{ asset('images/member/hot/flldp/flldp_area.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/flldp_area.jpg') }}" class="img-fluid mx-auto" alt=""></a>
            </div>

            <div class="row xs-mt-20">
                <div class="col-4">
                    <a href="{{ asset('images/member/hot/flldp/7.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/7.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/flldp/8.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/8.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/flldp/9.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/9.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
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
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">Investment information</h4>

        <p>Location <span class="float-right">Slovak Republic</span></p>

        <p>Asset class <span class="float-right">New developments</span></p>

        <p>Cost of investment <span class="float-right">&euro; 3 000 000</span></p>

        <p>Expected ROI by completion <span class="float-right">55-75%</span></p>

        <p>Area <span class="float-right">366 324 m<sup>2</sup></span></p>
    </div>

    <a href="{{ route('member.invest') }}" class="btn btn-block btn-primary disabled xs-mb-20">Invest<br>(Coming soon: 7 weeks)</a>

    <a href="" class="btn btn-block btn-primary" data-toggle="modal" data-target="#projectContactModal">Send me Case study<br>as soon as it is available</a>
@endsection