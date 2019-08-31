@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Investment properties - Bratislava - Office renovation')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'Investment properties / Bratislava Office renovation'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/properties/bratislava/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>Bratislava <small>Office renovation</small></h1>

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

                                    <p>CEE Region, Central Eastern Europe, Bratislava, Slovak Republic.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media xs-mb-20 lg-mb-30">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Parameters of property</h3>

                                    <p>Entire floor area: 1.410 m2 Total land area 446 m2 Ground coverage 330 m2 Property status: requires complete reconstruction.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Possible Buy-Fix-Let projects</h3>

                                    <p>Let CEE Real Estate Group buy, reconstruct and manage it for you. 80% occupancy with long term secure tender with average yearly capital grow 4-6% and yearly rental income between 6-8%.</p>
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
                                    <p>With rental incomes steadily increasing over recent years letting out a property can be a good way to bring in a regular income. If you can find the right property and the right mortgage it is possible to make a rental yield of around 5 – 10% depending on the location and whether you offer long or short-term rentals.</p>

                                    <p>Lenders will look at the potential rental income from the property to decide on how much to lend to you. Getting an idea of how much rental income you are likely to get from a property is quite simple. You can look at local property listings and speak to letting agents to find out how much similar properties are on the market for.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Photos</h2>

                            <div class="row xs-mt-20">
                                <div class="col-3">
                                    <img src="{{ asset('images/member/properties/bratislava/1.jpeg') }}" class="img-fluid d-block mx-auto" alt="">
                                </div>

                                <div class="col-3">
                                    <img src="{{ asset('images/member/properties/bratislava/2.jpeg') }}" class="img-fluid d-block mx-auto" alt="">
                                </div>

                                <div class="col-3">
                                    <img src="{{ asset('images/member/properties/bratislava/3.jpeg') }}" class="img-fluid d-block mx-auto" alt="">
                                </div>

                                <div class="col-3">
                                    <img src="{{ asset('images/member/properties/bratislava/4.jpeg') }}" class="img-fluid d-block mx-auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card d-print-none">
                        <div class="card-body">
                            <h2 class="card-title">Map</h2>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.9789379317845!2d17.105594066068807!3d48.149211279224346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c895afb8b3373%3A0x8f394a95b1144662!2sPrezidentsk%C3%BD+pal%C3%A1c%2C+811+06+Bratislava!5e0!3m2!1sen!2ssk!4v1528292241734" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock">
                        <div class="info bg_grey">
                            <h4 class="title text-center">Investment information</h4>

                            <p>Location <span class="float-right">Slovak Republic</span></p>

                            <p>Asset class <span class="float-right">Investment properties</span></p>

                            <p>Cost of investment <span class="float-right">on request</span></p>

                            <p>ROI - project timeframe <span class="float-right">on request</span></p>

                            <p>Area <span class="float-right">1 410 m<sup>2</sup></span></p>
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