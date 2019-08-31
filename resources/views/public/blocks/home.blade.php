<div id="homeBlock">
    <div id="mainCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block d-md-none w-100" src="{{ asset('images/pub/carousel/sm/3.jpg') }}" alt="">
                <img class="d-none d-md-block w-100" src="{{ asset('images/pub/carousel/3.jpg') }}" alt="">

                <div class="carousel-caption">
                    <div class="top">
                        @include('includes/mobile_lang_switcher')

                        <h2 class="title" data-aos="zoom-in">@lang('public/home.carousel.1')</h2>

                        <div data-aos="zoom-in" data-aos-delay="1000">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">@lang('public/home.carousel.button')</a>

                            <p class="login text-shadow">@lang('auth.alreadyShort') <a href="" data-toggle="modal" data-target="#loginModal">@lang('public/nav.logIn')</a></p>
                        </div>
                    </div>

                    <div class="bottom">
                        <p class="mention"><small>@lang('public/home.mention')</small></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block d-md-none w-100" src="{{ asset('images/pub/carousel/sm/2.jpg') }}" alt="">
                <img class="d-none d-md-block w-100" src="{{ asset('images/pub/carousel/2.jpg') }}" alt="">

                <div class="carousel-caption">
                    <div class="top">
                        @include('includes/mobile_lang_switcher')

                        <h2 class="title" data-aos="zoom-in">@lang('public/home.carousel.2')</h2>

                        <div data-aos="zoom-in" data-aos-delay="1000">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">@lang('public/home.carousel.button')</a>

                            <p class="login text-shadow">@lang('auth.alreadyShort') <a href="" data-toggle="modal" data-target="#loginModal">@lang('public/nav.logIn')</a></p>
                        </div>
                    </div>

                    <div class="bottom">
                        <p class="mention third"><small>@lang('public/home.mention')</small></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block d-md-none w-100" src="{{ asset('images/pub/carousel/sm/1.jpg') }}" alt="">
                <img class="d-none d-md-block w-100" src="{{ asset('images/pub/carousel/1.jpg') }}" alt="">

                <div class="carousel-caption">
                    <div class="top">
                        @include('includes/mobile_lang_switcher')

                        <h2 class="title" data-aos="zoom-in">@lang('public/home.carousel.3')</h2>

                        <div data-aos="zoom-in" data-aos-delay="1000">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">@lang('public/home.carousel.button')</a>

                            <p class="login text-shadow">@lang('auth.alreadyShort') <a href="" data-toggle="modal" data-target="#loginModal">@lang('public/nav.logIn')</a></p>
                        </div>
                    </div>

                    <div class="bottom">
                        <p class="mention"><small>@lang('public/home.mention')</small></p>
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="bg_secondary text-center">
        <div class="container">
            <div class="row">
                <div class="col-4 col-sm-2 d-none d-sm-block xs-p-5 md-p-10 lg-p-20">
                    <img src="{{ asset('images/pub/brands/borse_frankfurt.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-4 col-sm-2 d-none d-sm-block xs-p-5 md-p-10 lg-p-20">
                    <img src="{{ asset('images/pub/brands/google_news.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-4 col-sm-2 xs-p-5 md-p-10 lg-p-20">
                    <img src="{{ asset('images/pub/brands/london_stock_exchange.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-4 col-sm-2 xs-p-5 md-p-10 lg-p-20">
                    <img src="{{ asset('images/pub/brands/daily_herald.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-4 col-sm-2 d-none d-sm-block xs-p-5 md-p-10 lg-p-20">
                    <img src="{{ asset('images/pub/brands/wall_street_select.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-4 col-sm-2 xs-p-5 md-p-10 lg-p-20">
                    <img src="{{ asset('images/pub/brands/yahoo_finance.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>