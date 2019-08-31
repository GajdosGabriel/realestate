@extends('member/bonds/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Real estate bonds')

@section('startBody')
    @include('member/bonds/modals/whyInvestModal')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row memberBlocks bgAlternate">
            <div class="col-12 col-lg-4 d-flex flex-column align-items-start">
                <div class="media align-items-center xs-mb-20">
                    <img src="{{ asset('images/member/bonds/icon_portfolio.png') }}" class="xs-mr-20" alt="">

                    <div class="media-body">
                        <h3>Property portfolio</h3>
                    </div>
                </div>

                <p class="xs-mb-20">Our prime real estate portfolio valuation/investor report with proven short term rental income for CEE Bond.</p>

                <a href="{{ route('member.bonds.portfolio') }}" class="btn btn-secondary mt-auto">@lang('general.more')</a>
            </div>

            <div class="col-12 col-lg-4 d-flex flex-column align-items-start">
                <div class="media align-items-center xs-mb-20">
                    <img src="{{ asset('images/member/bonds/icon_financials.png') }}" class="xs-mr-20" alt="">

                    <div class="media-body">
                        <h3>Financials</h3>
                    </div>
                </div>

                <p class="xs-mb-20">Case study, income calculator, entry levels, fixed income and payment schedules.</p>

                <a href="{{ route('member.bonds.financials') }}" class="btn btn-secondary mt-auto">@lang('general.more')</a>
            </div>

            <div class="col-12 col-lg-4 d-flex flex-column align-items-start">
                <div class="media align-items-center xs-mb-20">
                    <img src="{{ asset('images/member/icon_partner.png') }}" class="xs-mr-20" alt="">

                    <div class="media-body">
                        <h3>Partner program</h3>
                    </div>
                </div>

                <p class="xs-mb-20">Earn money by bringing the excitement of BND Corporate Bonds to your clients or contacts.</p>

                <a href="{{ route('member.partner') }}" class="btn btn-secondary mt-auto">@lang('general.more')</a>
            </div>

            <div class="col-12 col-lg-4 d-flex flex-column align-items-start">
                <div class="media align-items-center xs-mb-20">
                    <img src="{{ asset('images/member/bonds/icon_tac.png') }}" class="xs-mr-20" alt="">

                    <div class="media-body">
                        <h3>Terms of bonds</h3>
                    </div>
                </div>

                <p class="xs-mb-20">Study our CEE Bonds terms & conditions, all legal aspects and warranties.</p>

                <a href="{{ route('member.bonds.tac') }}" class="btn btn-secondary mt-auto">@lang('general.more')</a>
            </div>

            <div class="col-12 col-lg-4 d-flex flex-column align-items-start">
                <div class="media align-items-center xs-mb-20">
                    <img src="{{ asset('images/member/bonds/icon_bond.png') }}" class="xs-mr-20" alt="">

                    <div class="media-body">
                        <h3>Buy the bonds</h3>
                    </div>
                </div>

                <p class="xs-mb-20">Invest now and order the BND Bond online in 3 simple steps.</p>

                <a href="{{ route('member.bonds.buy') }}" class="btn btn-secondary mt-auto">@lang('general.more')</a>
            </div>

            <div class="col-12 col-lg-4 d-flex flex-column align-items-start">
                <div class="media align-items-center xs-mb-20">
                    <img class="" src="" alt="">

                    <div class="media-body">
                        <h3>Why invest in bonds</h3>
                    </div>
                </div>

                <a href="" class="btn btn-primary mt-auto" data-toggle="modal" data-target="#whyInvestModal">Watch video</a>
            </div>
        </div>
    </div>
@endsection