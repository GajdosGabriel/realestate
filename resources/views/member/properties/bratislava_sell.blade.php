@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Investment properties - Bratislava - Residential renovation')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'Investment properties / Bratislava Residential renovation'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/properties/bratislava-sell/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>Bratislava <small>Residential renovation</small></h1>

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

                                    <p>Total floor areas 1.500 m2 Build area 409 m2 Ground floor 700 m2, only front view of building is reconstructed the rest is still from 1920 original state. 6 apartments in the building.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Possible Buy-Fix-Sell projects</h3>

                                    <p>CEE Real Estate Group buy, renovate and manage it for you. Projects with 6 apartments of average 80 m2. High ROI when build out extra floors and apartments on top of the existing building.</p>
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
                                    <p>Profits from flipping real estate come from either buying low and selling high (often in a rapidly rising market) or buying a house that needs repair and fixing it up before reselling it for a profit ("fix and flip").</p>

                                    <p>Under the "fix and sale" scenario, an investor will purchase a property at a discount price. The discount may be because of:</p>

                                    <ul>
                                        <li>the property's condition (e.g., the house needs major renovations and/or repairs which the owner either does not want, or cannot afford, to do), or</li>

                                        <li>the owner(s) needing to sell a property quickly (e.g., relocation, divorce, pending foreclosure).</li>
                                    </ul>

                                    <p>The investor will then perform necessary renovations and repairs and attempt to make a profit by selling the house quickly at a higher price. The "fix and flip" scenario is profitable to investors because the average homebuyer lacks the time and funds to repairs and renovations, so they look for a property that is ready to move into. Also, most traditional mortgage lenders require the home to be habitable with no significant repairs.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Photos</h2>

                            <a href="{{ asset('images/member/properties/bratislava-sell/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/properties/bratislava-sell/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <img src="{{ asset('images/member/properties/bratislava-sell/1.jpg') }}" class="img-fluid d-block mx-auto" alt="">
                                </div>

                                <div class="col-4">
                                    <img src="{{ asset('images/member/properties/bratislava-sell/2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
                                </div>

                                <div class="col-4">
                                    <img src="{{ asset('images/member/properties/bratislava-sell/3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card d-print-none">
                        <div class="card-body">
                            <h2 class="card-title">Map</h2>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.109954801903!2d17.11563811606878!3d48.14668537922415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c89468c3389fb%3A0x1cfb5278fec36172!2sCintor%C3%ADnska%2C+811+08+Bratislava!5e0!3m2!1sen!2ssk!4v1528293474424" frameborder="0" style="border:0" allowfullscreen></iframe>                            </div>
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

                            <p>Projected equity multiply <span class="float-right">on request</span></p>

                            <p>Area <span class="float-right">1 500 m<sup>2</sup></span></p>
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