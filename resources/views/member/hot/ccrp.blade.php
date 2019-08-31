@extends('member/_layoutProject')

@section('projectCategory')
    Hot projects
@endsection

@section('projectName')
    City center renovation project
@endsection

@section('projectHeader')
    <img src="{{ asset('images/member/hot/ccrp/cover.jpg') }}" class="img-fluid mx-auto" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Bratislava, Slovak Republic</p>

                    <h3 class="color_primary xs-mb-0">Expected ROI 35%, 9-12 months</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectContent')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Key deal points</h2>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>Choose <strong>Real Estate Bonds</strong> to invest in this project.</p>

                    <p class="text-danger">Full case study will be available approximately in 2 weeks.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Total m<sup>2</sup></h2>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <div class="row xs-mt-20">
                        <div class="col-4"><p>Land 635,00</p></div>
                        <div class="col-6"><p>Gross building 962,82</p></div>
                        <div class="col-4"><p>Apartments 636,29</p></div>
                        <div class="col-6"><p>Commercial 158,09</p></div>
                        <div class="col-4"><p>Parking 75,00 </p></div>
                        <div class="col-6"><p>Balcony & terrace 72,85</p></div>
                        <div class="col-4"><p>Storage 35,14</p></div>
                        <div class="col-6"><p>Common others 95,59</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Photos</h2>

            <h4>Exterior</h4>

            <a href="{{ asset('images/member/hot/ccrp/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/1.jpg') }}" class="img-fluid mx-auto w-100" alt=""></a>

            <div class="row xs-mt-20 xs-mb-20">
                <div class="col-12 col-lg-3 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-3 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-3 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-3">
                    <a href="{{ asset('images/member/hot/ccrp/5.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/5.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            {{--<div class="embed-responsive embed-responsive-16by9 d-none d-lg-block xs-mb-20">--}}
                {{--<iframe src="https://h5.veer.tv/player?vid=215693" frameborder="0" allowfullscreen="true" width="560" height="315"></iframe>--}}
            {{--</div>--}}

            <div class="embed-responsive embed-responsive-16by9 xs-mb-20">
                <iframe src="https://h5.veer.tv/photo-player?pid=258558" frameborder="0" allowfullscreen="true"></iframe>
            </div>

            {{--<div class="embed-responsive embed-responsive-16by9 xs-mb-20">--}}
                {{--<iframe src="https://h5.veer.tv/photo-player?pid=258557" frameborder="0" allowfullscreen="true"></iframe>--}}
            {{--</div>--}}

            {{--<div class="embed-responsive embed-responsive-16by9 xs-mb-20">--}}
                {{--<iframe src="https://h5.veer.tv/photo-player?pid=258675" frameborder="0" allowfullscreen="true"></iframe>--}}
            {{--</div>--}}

            <h4 class="xs-mt-20">Interior</h4>

            <a href="{{ asset('images/member/hot/ccrp/6.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/6.jpg') }}" class="img-fluid w-100" alt=""></a>

            <div class="row xs-mt-20">
                <div class="col-12 col-lg-4 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/7.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/7.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-4 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/8.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/8.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/member/hot/ccrp/9.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/9.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <div class="row xs-mt-20 xs-mb-20">
                <div class="col-12 col-lg-4 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/10.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/10.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-4 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/11.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/11.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/member/hot/ccrp/12.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/12.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            {{--<div class="embed-responsive embed-responsive-16by9 d-none d-lg-block xs-mb-20">--}}
                {{--<iframe src="https://h5.veer.tv/player?vid=215701" frameborder="0" allowfullscreen="true" width="560" height="315"></iframe>--}}
            {{--</div>--}}

            {{--<div class="embed-responsive embed-responsive-16by9 xs-mb-20">--}}
                {{--<iframe src="https://h5.veer.tv/photo-player?pid=258559" frameborder="0" allowfullscreen="true"></iframe>--}}
            {{--</div>--}}

            {{--<div class="embed-responsive embed-responsive-16by9 xs-mb-20">--}}
                {{--<iframe src="https://h5.veer.tv/photo-player?pid=258560" frameborder="0" allowfullscreen="true"></iframe>--}}
            {{--</div>--}}

            <h4 class="xs-mt-20">Floor plans</h4>

            <div>
                <a href="{{ asset('images/member/hot/ccrp/plans/0.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/plans/sm/0.jpg') }}" class="img-fluid mx-auto" alt=""></a>
            </div>

            <div class="row xs-mt-20">
                <div class="col-3">
                    <a href="{{ asset('images/member/hot/ccrp/plans/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/plans/sm/1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-3">
                    <a href="{{ asset('images/member/hot/ccrp/plans/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/plans/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-3">
                    <a href="{{ asset('images/member/hot/ccrp/plans/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/plans/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-3">
                    <a href="{{ asset('images/member/hot/ccrp/plans/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/plans/sm/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">Investment information</h4>

        <p>Location <span class="float-right">Bratislava, Slovak Republic</span></p>

        <p>Asset class <span class="float-right">Investment properties</span></p>

        <p>Total investment <span class="float-right">&euro; 450 000</span></p>

        <p>Minimum investment <span class="float-right">&euro; 112 500</span></p>

        <p>Expected ROI <span class="float-right">35%</span></p>
    </div>

    <a href="{{ route('member.invest') }}" class="btn btn-block btn-primary disabled xs-mb-20">Invest<br>(Coming soon: 2 weeks)</a>

    <a href="" class="btn btn-block btn-primary" data-toggle="modal" data-target="#projectContactModal">Send me Case study<br>as soon as it is available</a>
@endsection