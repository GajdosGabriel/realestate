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

        <pclass="font-montserrat h4 text-center xs-mb-20 xs-mt-20"><strong>@lang('public/about.text2')</strong> @lang('public/about.text3')
         <span class="color_primary">@lang('public/about.text4')</span></p>

        <div  id="media" class="text-center xs-mb-20 lg-mb-50">
           {{-- <a href="" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">@lang('general.moreInfo')</a>--}}
        </div>
    </div>

    <div id="testimonialsBlock" class="container-fluid bg_secondary xs-pt-20 xs-pb-20 lg-pt-50 lg-pb-50">
        <div class="container">
            <h6 class="header-sm color_primary font-weight-bold text-center xs-mb-20">@lang('public/media.title')</h6>

            <h2 class="header-lg font-pt-serif xs-mb-20 lg-mb-50 text-center">@lang('public/media.project')</h2>


            <div class="row justify-content-md-center">
                {{-- Markíza --}}
                <div class="col-12 col-lg-3 xs-pb-50 lg-pb-0">
                    <img src="{{ asset('images/logo_tv_markiza.png') }}" style="margin-bottom: 18px;margin-top: -13px;display: block;  margin-left: auto;  margin-right: auto; width: 32%;" alt="" class="lead text-center" data-aos="zoom-in">

                    {{--<hr style="" class="part primary">--}}
                    <div class="color_primary text-center font-weight-bold" style="font-size: 120%; ">
                        <a href="https://www.youtube.com/watch?v=GOz6jHcScB0" target="_blank">TV 26.12.2019</a><br>
                        <a href="https://www.tvnoviny.sk/domace/1985600_na-zemplinsku-siravu-mieri-novy-investor-cast-sa-bude-podobat-na-primorske-letovisko" target="_blank">WEB 26.12.2019</a>
                    </div>

                    {{-- TRENDS.sk --}}
                    <img src="{{ asset('images/logo_trends.png') }}" style="margin-bottom: 18px;margin-top: 60px;display: block;  margin-left: auto;  margin-right: auto; width: 72%;" alt="" class="lead text-center" data-aos="zoom-in">

                    <div class="color_primary text-center font-weight-bold" style="font-size: 120%; ">
                        <a href="https://reality.etrend.sk/komercne-nehnutelnosti/investicia-za-miliony-cast-noveho-rekreacneho-arealu-na-sirave-maju-otvorit-toto-leto.html" target="_blank">@lang('public/about.news') 10.02.2020</a><br>
                    </div>

                </div>

                {{-- SME --}}
                <div class="col-12 col-lg-3 xs-pb-50 lg-pb-0">
                    <img src="{{ asset('images/logo_sme.png') }}" style="margin-bottom: 37px;display: block;  margin-left: auto;  margin-right: auto; width: 77%;" alt="" class="lead text-center" data-aos="zoom-in">

                    {{--<hr style="" class="part primary">--}}
                    <div class="color_primary text-center font-weight-bold" style="font-size: 120%; ">
                        <a href="https://index.sme.sk/c/22186310/na-vychode-kreslia-novu-dedinu-ma-pripominat-primorske-stredisko.html" target="_blank">@lang('public/about.news') 26.08.2019</a><br>
                        <a href="https://vladimirseman2.blog.sme.sk/c/528548/otvoreny-list-richardovi-sulikovi-o-zemplinskej-sirave.html" target="_blank">BLOG 25.02.2020</a><br>
                    </div>

                    {{-- ZOZNAM.sk --}}
                    <img src="{{ asset('images/logo_zoznam.png') }}" style="margin-bottom: 8px;margin-top: 43px;display: block;  margin-left: auto;  margin-right: auto; width: 72%;" alt="" class="lead text-center" data-aos="zoom-in">

                    <div class="color_primary text-center font-weight-bold" style="font-size: 120%; ">
                        <a href="https://www.topky.sk/cl/10/1860475/Velky-projekt-na-vychode-Slovenska--Rekreacny-komplex-za-sest-milionov" target="_blank">@lang('public/about.news') 13.02.2020</a><br>
                    </div>
                </div>

                {{-- RTVS --}}
                <div class="col-12 col-lg-3 xs-pb-50 lg-pb-0">
                    <img src="{{ asset('images/logo_rtv.png') }}" style="margin-bottom: 20px;display: block;  margin-left: auto;  margin-right: auto;  width: 55%;" alt="" class="lead text-center" data-aos="zoom-in">

                    {{--<hr class="part primary">--}}
                    <div class="color_primary text-center font-weight-bold" style="font-size: 120%; ">
                        <a href="https://www.rtvs.sk/radio/archiv/1115/1272668?fbclid=IwAR1SeM7AA08qTbWmATZ43fPaDf0tckTCrwu4yjr0TgSZZFgszLLR6D529qs" target="_blank">RADIO 29.01.2020</a><br>
                       <span style="font-size: 85%">@lang('public/about.from')</span><br>
                    </div>

                    {{-- DNES 24 --}}
                    <img src="{{ asset('images/logo_dnes24.png') }}" style="margin-bottom: 6px;margin-top: 27px;display: block;  margin-left: auto;  margin-right: auto; width: 62%;" alt="" class="lead text-center" data-aos="zoom-in">

                    <div class="color_primary text-center font-weight-bold" style="font-size: 120%; ">
                        <a href="https://michalovce.dnes24.sk/pri-zemplinskej-sirave-planuju-rekreacny-komplex-za-sest-milionov-eur-353328" target="_blank">@lang('public/about.news') 10.02.2020</a><br>
                    </div>

                </div>


                {{-- TV R  --}}
                <div class="col-12 col-lg-3 xs-pb-50 lg-pb-0" style="position: relative">
                    <img src="{{ asset('images/logo_tv_region.png') }}" style="margin-bottom: 42px;display: block;  margin-left: auto; margin-right: auto; width: 70%;" alt="" class="lead text-center" data-aos="zoom-in">

                    {{--<hr class="part primary">--}}
                    <div class="color_primary text-center font-weight-bold" style="font-size: 120%; ">
                        <a href="https://www.youtube.com/watch?v=eJd00BG2VRU" target="_blank">26.11.2019</a><br>
                        <a href="https://www.youtube.com/watch?v=JkWUZ4pnKiM&t=30s" target="_blank">08.12.2019</a><br>
                        <a href="https://www.youtube.com/watch?v=E3AMJbSpnpc&t=3s" target="_blank">14.12.2019</a><br>
                        <a href="https://www.youtube.com/watch?v=InsRsBAaeuw&t=5473s" target="_blank">23.12.2019</a><br>
                        <a href="https://youtu.be/fLq8bWqQc4M?t=25" target="_blank">01.01.2020</a><br>
                        <a href="https://www.youtube.com/watch?v=ecBC0ZbFXug&t=25s" target="_blank">08.01.2020</a><br>
                        <a href="https://www.youtube.com/watch?v=d_XjKTOA994" target="_blank">20.01.2020</a><br>
                        <a href="https://youtu.be/AEyUvulc6Dc?t=30" target="_blank">04.02.2020</a><br>
                        <a href="https://youtu.be/hcy5mOCcWqQ?t=4888" target="_blank">25.02.2020</a><br>
                        <a href="https://youtu.be/R74sWINVBhI?t=25" target="_blank">05.04.2020</a><br>
                    </div>
                </div>



                {{--<div class="d-none d-md-block col-12 col-lg-3">--}}




                 {{--TV Senior--}}
                {{--<div class="d-none d-md-block col-12 col-lg-3">--}}
                    {{--<img src="{{ asset('images/logo_tv_senior.png') }}" style="margin-bottom: 13px;display: block;  margin-left: auto;  margin-right: auto;  width: 55%;" alt="" class="lead text-center" data-aos="zoom-in">--}}

                    {{--<hr class="part primary">--}}
                    {{--<div class="color_primary text-center font-weight-bold" style="font-size: 120%; ">--}}
                        {{--<a href="https://www.youtube.com/watch?time_continue=6786&v=49LzjUCM_do&feature=emb_logo" target="_blank">02.12.2019</a><br>--}}
                        {{--<a href="https://youtu.be/Qhcd7OGjXlI?t=3484" target="_blank">10.12.2019</a><br>--}}
                        {{--<a href="https://youtu.be/RP4G4iOCYnQ?t=5900" target="_blank">15.12.2019</a><br>--}}
                        {{--<a href="https://youtu.be/yCIL1VKZ63c?t=5726" target="_blank">20.12.2019</a><br>--}}
                        {{--<a href="https://youtu.be/5e4CsMjAYQc?t=2559" target="_blank">30.12.2019</a><br>--}}
                        {{--<a href="https://youtu.be/2Vwr3S5ocs8?t=3208" target="_blank">07.01.2020</a><br>--}}
                        {{--<a href="https://youtu.be/mF2SJRdL5Sg?t=2873" target="_blank">19.01.2020</a><br>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>

            <div class="text-center xs-mt-50">
                <a href="#contactBlock" class="btn btn-secondary internal">@lang('general.contactUs')</a>
            </div>
        </div>
    </div>

</div>