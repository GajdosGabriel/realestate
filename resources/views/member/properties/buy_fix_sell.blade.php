@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Investment properties - Buy-fix/let')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'Investment properties / Buy-fix/let'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/properties/buy-fix-sell/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>Buy-fix-sell <small>buy-fix/let</small></h1>

                <p class="lead">Central Eastern Europe</p>
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

                                    <p>CEE Region, Central Eastern Europe; Prague, Vienna, Bratislava, Budapest and the surrounding areas.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media xs-mb-20 lg-mb-30">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Parameters of properties</h3>

                                    <p>The average size is 60m2 up to 500m2 (average sizes for full residential or commercial buildings is from 1.000 m2 up to 10.000 m2 or more).</p>
                                </div>
                            </div>

                            <hr>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Possible Buy-fix-sell / let projects</h3>

                                    <p>Let CEE Real Estate Group find it, buy it and manage it for you within your budget. Projects sized from 60 m2 up till 500 m2 will require a budget from 100k up to 1 million, projects for residential or commercial buildings will need a budget from 1 million up to 10 million or more. Finances are available up to 70%. Great Investment Opportunity with 25% profit per project when you sell it. When you let it the average yearly capital grow can vary between 4-6% and yearly rental income between 6-8%.</p>
                                </div>
                            </div>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/properties/buy-fix-sell/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/properties/buy-fix-sell/sm/1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/properties/buy-fix-sell/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/properties/buy-fix-sell/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/properties/buy-fix-sell/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/properties/buy-fix-sell/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
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

                                    <p>Under the "fix and sale" scenario, an investor will purchase a property at a discount price. The discount may be due to:</p>

                                    <ul>
                                        <li>the property's condition (e.g., the house needs major renovations and/or repairs which the owner either does not want, or cannot afford, to do), or</li>

                                        <li>the owner(s) needing to sell a property quickly (e.g., relocation, divorce, pending foreclosure).</li>
                                    </ul>

                                    <p>The investor will then perform necessary renovations and repairs and attempt to make a profit by selling the house quickly at a higher price. The "fix and flip" scenario is profitable to investors because the average homebuyer lacks the time and funds for repairs and renovations, so they look for a property that is ready to move into. Also, most traditional mortgage lenders require the home to be habitable with no significant repairs.</p>

                                    <p>With rental incomes steadily increasing over recent years letting out a property can be a good way to bring in a regular income. If you can find the right property and the right mortgage it is possible to make a rental yield of around 5 – 10% depending on the location and whether you offer long or short-term rentals.
                                        Lenders will look at the potential rental income from the property to decide on how much to lend to you. Getting an idea of how much rental income you are likely to get from a property is quite simple. You can look at local property listings and speak to letting agents to find out how much similar properties are on the market for.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Photos</h2>

                            <a href="{{ asset('images/member/properties/buy-fix-sell/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/properties/buy-fix-sell/sm/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/properties/buy-fix-sell/5.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/properties/buy-fix-sell/sm/5.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/properties/buy-fix-sell/6.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/properties/buy-fix-sell/sm/6.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/properties/buy-fix-sell/7.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/properties/buy-fix-sell/sm/7.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card d-print-none">
                        <div class="card-body">
                            <h2 class="card-title">Map</h2>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1344616.966476462!2d16.64625992914549!3d48.835228065020154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssk!4v1528288087389" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock">
                        <div class="info bg_grey">
                            <h4 class="title text-center">Investment information</h4>

                            <p>Location <span class="float-right">Central Eastern Europe</span></p>

                            <p>Asset class <span class="float-right">Investment properties</span></p>

                            <p>Cost of investment <span class="float-right">&euro; 100K to 10M</span></p>

                            <p>Projected equity multiply <span class="float-right">1,4 - 2,0 x</span></p>

                            <p>Area <span class="float-right">60 to 10 000 m<sup>2</sup></span></p>
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