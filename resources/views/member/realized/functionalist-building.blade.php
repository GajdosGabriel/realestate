@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Realized projects - Functionalist building')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'Realized projects / Functionalist building'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <a href="{{ route('member.realized.home') }}" class="link"><i class="fas fa-angle-left"></i> Back to Realized projects</a>

        <img src="{{ asset('images/member/realized/functionalist-building/cover.jpg') }}" alt="">

        <div class="name">
            <div class="container">
                <h1>Functionalist building - 37% ROI</h1>

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
                            <h2 class="card-title">Key deal points</h2>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <h3>Location</h3>

                                    <p>Objects of the former hospital represent heyday of functionalism in Slovakia. In association with the municipal monument board we prepared a reconstruction that would give to the cultural monument back its original functionalist character, provide new functions and also enable the building to come up to such functions. This will be reached by preserving the original historical elements and values. We rid the objects of superstructures with inclined roof that was added later and interfered with their functionalist character. At its place we designed a new superstructure not meant as a part of the building but on the contrary clearly defining its new function and showing the historical buildings in their original beauty. In the renovated buildings new functions will appear and along with health services the building will provide residential and office space as well as community facilities. As the new functions required static transport solutions under the Bezručova 3 building a multi-storey underground parking lot was designed. Sensitive and professional reconstruction will breathe new life into a historically important building preserving its genius loci and location. After a long time, the Art Nouveau Blue Church will have a respectable functionalist neighbour with its original appearance that will serve comfortably its future inhabitants and visitors.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Photos</h2>

                            <a href="{{ asset('images/member/realized/functionalist-building/fuctionalist-building-3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/functionalist-building/fuctionalist-building-3.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/realized/functionalist-building/fuctionalist-building-1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/functionalist-building/fuctionalist-building-1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/realized/functionalist-building/fuctionalist-building-2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/functionalist-building/fuctionalist-building-2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/realized/functionalist-building/fuctionalist-building-4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/functionalist-building/fuctionalist-building-4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card d-print-none">
                        <div class="card-body">
                            <h2 class="card-title">Map</h2>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17402.18629466928!2d17.099313515274552!3d48.13625319221128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c894102de6d6b%3A0xc4605f2cc6b0ec57!2sBezru%C4%8Dova+2531%2F5%2C+811+09+Bratislava!5e0!3m2!1sen!2ssk!4v1530867446284" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock">
                        <div class="info bg_grey">
                            <h4 class="title text-center">Investment information</h4>

                            <p>Location <span class="float-right">Slovak Republic</span></p>

                            <p>Asset class <span class="float-right">Buy-Fix-Sell</span></p>

                            {{--<p>Area <span class="float-right">? m<sup>2</sup></span></p>--}}
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