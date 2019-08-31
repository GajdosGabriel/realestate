@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Hot projects - Bratislava office building')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'Hot projects / Bratislava office building'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/hot/bratislava_office/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>Office building Dunajská 4</h1>

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
                            <h2 class="card-title">Property</h2>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>OFFICE BUILDING WITH 9.300 SQM OF GROSS LEASABLE AREA IN CITY CENTER</h3>

                                    <p>The property in question is an administrative building in the city
                                        centre of Bratislava.
                                        The object consists of two buildings in a row built placed on
                                        shopping street Dunajská. From the front view the right part 1is
                                        from year 1985 and left part 2 is from 1975.</p>

                                    <a href="{{ asset('images/member/hot/bratislava_office/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/bratislava_office/1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>

                                    <hr class="part primary">

                                    <h4>DESCRIPTION OF THE BUILDING</h4>

                                    <ul>
                                        <li>total floor area approx. 9.300m2 GLA</li>
                                        <li>current max. leasable area approx. 6.250m2</li>
                                        <li>current occupancy approx. 66% of the leasable area</li>
                                        <li>2 underground and 10 upper floors</li>
                                        <li>block II. has also 2nd underground floor where storage rooms and air conditioning machinery are placed</li>
                                        <li>4 passenger lifts with load capacity of 630kg, in each part two pieces</li>
                                        <li>2 cargo lifts run between ground floor and 1st upper floor</li>
                                        <li>2 main + 2 escape staircases between ground floor-1st floor + 1 rotating staircase on the ground floor in part 1</li>
                                    </ul>

                                    <h4>FUNCTIONAL USE OF THE BUILDING</h4>

                                    <ul>
                                        <li>ground floor and 1st floor are used as business premises</li>
                                        <li>from 2nd floor - office space</li>
                                        <li>underground garage with 16 parking lots (in ground floor) +technical background, storage and transformer station</li>
                                        <li>from. 2nd floor buildings are connected by 2 main staircases</li>
                                        <li>25 semi-enclosed outdoor parking lots in the courtyard</li>
                                        <li>smaller loggias and balconies are built up from 2nd floor</li>
                                        <li>on the 8th floor there are 3 large terraces with a surface of 185m2</li>
                                        <li>the lift machinery and air-conditioning machinery are on the roof</li>
                                    </ul>

                                    <h4>RECONSTRUCTION (2011)</h4>

                                    <ul>
                                        <li>modernization of the entrance space (lobby)</li>
                                        <li>4 personal lifts + 1 cargo lift renewal</li>
                                        <li>reconstruction of the basement into the underground garage</li>
                                        <li>replacement of facade and window constructions on ground floor-2nd floor</li>
                                        <li>renewal of main electrical wiring, including distribution boxes and risers</li>
                                        <li>partial reconstruction of offices and sanitary facilities</li>
                                    </ul>

                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <a href="{{ asset('images/member/hot/bratislava_office/10.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/bratislava_office/10.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <a href="{{ asset('images/member/hot/bratislava_office/11.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/bratislava_office/11.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                        </div>
                                    </div>

                                    <hr class="part primary">

                                    <h4>STANDARDS OF THE BUILDING</h4>

                                    <ul>
                                        <li>heating provided by heaters</li>
                                        <li>60% of office units have central A/C</li>
                                        <li>ventilation by cooling units</li>
                                        <li>cassette ceilings</li>
                                        <li>data lines in the whole building</li>
                                        <li>electronic alarm system</li>
                                        <li>furnished meeting room (without overhead projector) on 2nd and 3rd floor</li>
                                    </ul>

                                    <h4>RENTAL STRUCTURE AND POTENTIAL</h4>

                                    <ul>
                                        <li>empty plot of 335m2 with up to 7 possible floors incl. ground floor</li>
                                        <li>optimalization of the ratio between net and gross total area</li>
                                        <li>a total reconstruction into a modern office building</li>
                                        <li>rebuilt into a residential or hotel building</li>
                                        <li>vacancy of around 34% of current NLA</li>
                                        <li>increase of cash flow - the current average price is around €11 / m2 / month / of current NLA</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Location / infrastructure</h2>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <p>The property in question is located in the centre of Bratislava on Dunajská Street, in direct proximity to Kamenné
                                        square. The Tesco Shopping Center and the Kiev Hotel are opposite the building. The intersection of Špitálska and
                                        Štúrova street leads by the left side. Dunajská Street leads directly to the nearby main bus station and the Eurovea
                                        Shopping Center lies next to it. Against it the Twin City Business Center is under construction. The Grösslingová
                                        street runs parallel with the back of the building.</p>

                                    <p>In the vicinity there are several institutions nearby e. g. Ministry of Labor, Social Affairs and Family of the Slovak
                                        Republic, several offices, Church of St. Ladislav or hotels, as well as the Downtown residential buildings. The
                                        Danube river side is just a few minutes walk away.
                                        The real estate is perfectly accessible by individual and public transport with tram and bus stops near Kamenné
                                        square. It has an excellent central infrastructure with all shopping, entertainment and leisure opportunities in its
                                        surroundings.</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <a href="{{ asset('images/member/hot/bratislava_office/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/bratislava_office/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <a href="{{ asset('images/member/hot/bratislava_office/5.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/bratislava_office/5.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Facts & Figures (In Euro)</h2>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Weighted list of income</h3>
                                </div>
                            </div>

                            <a href="{{ asset('images/member/hot/bratislava_office/8.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/bratislava_office/8.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>

                            <hr class="part primary">

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Overview of tenants</h3>
                                </div>
                            </div>

                            <a href="{{ asset('images/member/hot/bratislava_office/9.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/bratislava_office/9.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>

                            <hr class="part primary">

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Purchase price</h3>

                                    <p class="text-center lead">The price of mortgage-free property sought by our clients is</p>

                                    <p class="text-center lead font-weight-bold">€ 9 300 000,00</p>

                                    <p class="text-center lead">(in words euro nine million three hundred thousand)</p>

                                    <p class="text-center lead">Please note that the real estate agency charges 3% of the purchase price for commission</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Photos</h2>

                            <div>
                                <a href="{{ asset('images/member/hot/bratislava_office/6.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/bratislava_office/6.jpg') }}" class="img-fluid mx-auto" alt=""></a>
                            </div>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/bratislava_office/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/bratislava_office/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/bratislava_office/7.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/bratislava_office/7.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/bratislava_office/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/bratislava_office/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card d-print-none">
                        <div class="card-body">
                            <h2 class="card-title">Map</h2>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.2306087801453!2d17.111988516068713!3d48.14435917922412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8943e8b57a91%3A0xe2282e0e22473f84!2sDunajsk%C3%A1+2304%2F4%2C+811+08+Bratislava!5e0!3m2!1sen!2ssk!4v1533108789137" frameborder="0" style="border:0" allowfullscreen></iframe>
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

                            <p>Cost of investment <span class="float-right">&euro; 9 300 000</span></p>

                            {{--<p>Projected equity multiply <span class="float-right">on request</span></p>--}}

                            <p>Plot area <span class="float-right">1 643 m<sup>2</sup></span></p>

                            <p>Leasable area <span class="float-right">6 245 m<sup>2</sup></span></p>
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