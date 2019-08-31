<div id="aboutBlock" class="pageBlock">
    <div class="container">
        <div id="industryBlock" class="xs-pb-20">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h6 class="header-sm color_primary font-weight-bold text-center text-lg-left xs-mb-20">@lang('public/about.results')</h6>

                    <h2  class="header-lg font-pt-serif xs-mb-20 lg-mb-50">@lang('public/about.industry')</h2>

                    <p class="xs-mb-20 lg-mb-50">@lang('public/about.text')</p>
                </div>

                <div class="col-6 col-lg-3">
                    <img src="{{ asset('images/pub/78_percent.png') }}" class="img-fluid d-block mx-auto lg-mt-50 xl-mt-0" alt="">

                    <hr class="part primary">

                    <h3 class="font-pt-serif text-center">@lang('public/about.referral')</h3>
                </div>

                <div class="col-6 col-lg-3">
                    <img src="{{ asset('images/pub/92_percent.png') }}" class="img-fluid d-block mx-auto lg-mt-50 xl-mt-0" alt="">

                    <hr class="part primary">

                    <h3 class="font-pt-serif text-center">@lang('public/about.returning')</h3>
                </div>
            </div>
        </div>

        <p class="font-montserrat h4 text-center xs-mb-20"><strong>@lang('public/about.text2')</strong> @lang('public/about.text3') <span class="color_primary">@lang('public/about.text4')</span></p>

        <div class="text-center xs-mb-20 lg-mb-50">
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">@lang('general.moreInfo')</a>
        </div>
    </div>

    <div id="testimonialsBlock" class="container-fluid bg_secondary xs-pt-20 xs-pb-20 lg-pt-50 lg-pb-50">
        <div class="container">
            <h6 class="header-sm color_primary font-weight-bold text-center xs-mb-20">@lang('public/about.testimonials')</h6>

            <h2 class="header-lg font-pt-serif xs-mb-20 lg-mb-50 text-center">@lang('public/about.clients')</h2>

            <div class="row">
                <div class="col-12 col-lg-4 xs-pb-50 lg-pb-0">
                    <p class="lead text-center" data-aos="zoom-in">@lang('public/about.text6')</p>

                    <hr class="part primary">

                    <p class="text-center">John Davids, Sydney</p>
                </div>

                <div class="col-12 col-lg-4 xs-pb-50 lg-pb-0">
                    <p class="lead text-center" data-aos="zoom-in">@lang('public/about.text7')</p>

                    <hr class="part primary">

                    <p class="text-center">Gorden Dun, Dublin</p>
                </div>

                <div class="col-12 col-lg-4">
                    <p class="lead text-center" data-aos="zoom-in">@lang('public/about.text8')</p>

                    <hr class="part primary">

                    <p class="text-center">Peter Hromada, Slovakia</p>
                </div>
            </div>

            <div class="text-center xs-mt-20">
                <a href="#contactBlock" class="btn btn-secondary internal">@lang('general.contactUs')</a>
            </div>
        </div>
    </div>
</div>