@extends('member/_layoutProject')

@section('projectCategory')
    Hot projects
@endsection

@section('projectName')
    Short term renovation projects
@endsection

@section('projectHeader')
    <img src="{{ asset('images/member/hot/renovations/cover.jpg') }}" class="img-fluid mx-auto" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Prague, Vienna, Bratislava, Budapest</p>

                    <h3 class="color_primary xs-mb-0">Fixed ROI 10-12% p.a.</h3>
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
                    <p>Short term renovating and flipping for fast profits is making a comeback, as sluggish growth in the national real estate market is prompting investors to create their own opportunities to add value.</p>

                    <p>The key to the ‘renovate and flip’ strategy lies in knowing what improvements to make, in order to generate the highest possible profits.</p>

                    <p>With our experienced research team and network of architects, construction companies and real estate agents we can offer any investor all sizes of short term renovation projects in the CEE region.</p>

                    <p>CEE real estate group is the first real estate company which offers buy-fix-sell projects to be order fully online for any investor anywhere in the world, no physical appearance needed.</p>

                    <p>Choose Pooled resources to invest in short term renovation projects.</p>

                    <p><strong>Pooled resources:</strong></p>

                    <p>
                        CEE have created a pooled resource for investors who can’t invest in their own full buy-fix-sell projects like in the Title deed ownership or real estate bond options or who prefer a fixed income.
                        Pooled resources option is a simple solution to earn a steady 10, 11 or 12% fixed interest rate for 2, 3 or 4-year period of commitment.
                        Pooled resources will start from 10.000 euro and up.
                    </p>

                    <p><strong>Guarantees:</strong></p>

                    <p>
                        The real estate portfolio will guarantee the invested funds.
                        Our track record shows the results we have make with our partners in the past, as extra cover we also ask for performance bonds on future projects from all partners we work with.
                        All projects are checked by different top tier banks special development finance teams, if our projects and development plans are safe and realistic for them to invest in it as well, and get the estimate returns on investments.
                    </p>

                    <p class="color_primary">For any support to set up this investment or want more information, contact us on the live chat.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Photos</h2>

            <div>
                <a href="{{ asset('images/member/hot/renovations/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/renovations/sm/3.jpg') }}" class="img-fluid w-100 mx-auto" alt=""></a>
            </div>

            <div class="row xs-mt-20">
                <div class="col-6">
                    <a href="{{ asset('images/member/hot/renovations/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/renovations/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-6">
                    <a href="{{ asset('images/member/hot/renovations/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/renovations/sm/1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card d-print-none">
        <div class="card-body">
            <h2 class="card-title">Map</h2>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1336382.195857509!2d16.739401916964322!3d48.91129081990664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssk!4v1533554427304" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">Investment information</h4>

        <p>Location <span class="float-right">Central & Eastern Europe</span></p>

        <p>Asset class <span class="float-right">Investment properties</span></p>

        <p>Investments start from <span class="float-right">€ 10 000</span></p>

        <p>Fixed ROI  <span class="float-right">10-12% Per year</span></p>

        <p>Area <span class="float-right">50 - 300 m<sup>2</sup></span></p>
    </div>

    <a href="{{ route('member.invest') }}" class="btn btn-block btn-primary xs-mb-20">Invest</a>

    <a href="" class="btn btn-block btn-secondary" data-toggle="modal" data-target="#projectContactModal">Request more info</a>
@endsection