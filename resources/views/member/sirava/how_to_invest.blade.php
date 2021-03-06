@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - How to invest')

@section('content')
    <div class="container-fluid project-header">

        <img src="{{ asset('images/member/hot/flldp/23.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>@lang('member/how.title')</h1>
            </div>
        </div>
    </div>

    {{--  Sekcia  1 --}}
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">

                @include('member.includes._silent_partnership')

                <hr class="part primary">

                <h3 class="text-center">@lang('member/how.calc')</h3>
        {{--CALCULATOR--}}
                <div class="projectItem xs-mb-20 bg_secondary">
                    <div class="row">

                        <div class="col">
                            <div class="xs-p-10 calculator">

                                <div class="calculator-sp mt-2">
                                    <label>@lang('member/invest/step1.shares')</label>

                                    <div class="input-group">
                                        <input type="number" class="form-control cal_shares" name="sp[shares]" min="0.10" max="6" step="0.10" value="0.10">

                                        <div class="input-group-append">
                                            <span class="input-group-text addon-secondary">@lang('member/invest/step1.shares2')</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mt-2 mb-2">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="xs-mt-10">@lang('member/invest/step1.investment')</label>
                                                    <input type="text" class="form-control cal_investment" value="&euro; 15 000" readonly>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="xs-mt-10">@lang('member/invest/step1.yearly_dividend')</label>
                                                    <input type="text" class="form-control cal_yearly_dividend" value="&euro; 3 750" readonly>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="xs-mt-10">@lang('member/invest/step1.roi')</label>
                                                    <input type="text" class="form-control cal_roi" value="&euro; 90 000" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="col-12 col-lg-8 offset-lg-2">--}}
{{--                <p class="lead xs-mt-20">@lang('member/invest/step1.sp')</p>--}}

{{--                <p>@lang('member/invest/step1.text4') @lang('member/invest/step1.text2')--}}
{{--                    @if(App::getLocale() == 'en')--}}
{{--                        <br>--}}
{{--                    @endif--}}
{{--                    @lang('member/invest/step1.text3')</p>--}}

{{--                <hr class="part primary">--}}

{{--                <h3 class="text-center">@lang('member/how.calc')</h3>--}}

{{--                <div class="cee calculator calculator-tdo bg_secondary xs-p-20">--}}
{{--                    <label class="lg-mt-20">@lang('member/invest/step1.shares')</label>--}}

{{--                    <div class="input-group">--}}
{{--                        <input type="number" class="form-control cal_shares" name="tdo[shares]" min="0.025" max="3" step="0.025" value="0.025">--}}

{{--                        <div class="input-group-append">--}}
{{--                            <span class="input-group-text addon-secondary">@lang('member/invest/step1.shares2')</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <label class="xs-mt-20 lg-mt-50">@lang('member/invest/step1.investment')</label>--}}

{{--                    <input type="text" class="form-control cal_investment" name="tdo[project][investment]" value="&euro; 1 000" readonly>--}}

{{--                    <label class="xs-mt-20">@lang('member/invest/step1.roi')</label>--}}

{{--                    <input type="text" class="form-control cal_roi" name="tdo[project][roi]" value="&euro; 3575" readonly>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-12 col-lg-6">--}}
{{--                <p class="lead xs-mt-20">@lang('member/invest/step1.tdo')</p>--}}

{{--                <p>@lang('member/invest/step1.text') @lang('member/invest/step1.text2')--}}
{{--                    @if(App::getLocale() == 'en')--}}
{{--                    <br>--}}
{{--                    @endif--}}
{{--                    @lang('member/invest/step1.text3')</p>--}}

{{--                <hr class="part primary">--}}

{{--                <h3 class="text-center">@lang('member/how.calc')</h3>--}}

{{--                <div class="cee calculator calculator-tdo bg_secondary xs-p-20">--}}
{{--                    <label class="lg-mt-20">@lang('member/invest/step1.shares')</label>--}}

{{--                    <div class="input-group">--}}
{{--                        <input type="number" class="form-control cal_shares" name="tdo[shares]" min="1" max="3" step="1" value="1">--}}

{{--                        <div class="input-group-append">--}}
{{--                            <span class="input-group-text addon-secondary">@lang('member/invest/step1.shares2')</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <label class="xs-mt-20 lg-mt-50">@lang('member/invest/step1.investment')</label>--}}

{{--                    <input type="text" class="form-control cal_investment" name="tdo[project][investment]" value="&euro; 40 000" readonly>--}}

{{--                    <label class="xs-mt-20">@lang('member/invest/step1.roi')</label>--}}

{{--                    <input type="text" class="form-control cal_roi" name="tdo[project][roi]" value="&euro; 143 000" readonly>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

        <hr class="part primary">

        <p class="lead text-center xs-mt-20 xs-mb-20">@lang('member/how.text')</p>
    </div>

    {{--  Sekcia  2 img --}}
    <div class="container-fluid bg_secondary xs-pt-20 xs-pb-20 lg-pb-50">
        <div class="row">
            <div class="col-12 col-lg-4">
                <h3 class="text-center color_primary">@lang('general.step') 1 <span class="popover-info" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="@lang('member/how.text2')"><i class="fas fa-info-circle"></i></span></h3>

                <a href="{{ asset('images/member/screenshot_step1_full_' . App::getLocale() . '.jpg') }}" data-lightbox="photos">
                    <img src="{{ asset('images/member/screenshot_step1_' . App::getLocale(). '.jpg') }}" class="img-fluid d-block mx-auto img-thumbnail xs-mb-20" alt="" data-aos="zoom-in">
                </a>

            </div>

            <div class="col-12 col-lg-4">
                <h3 class="text-center color_primary">@lang('general.step') 2 <span class="popover-info" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="@lang('member/how.text3')"><i class="fas fa-info-circle"></i></span></h3>

                @if(App::getLocale() == 'sk')
                    <a href="{{ asset('images/member/screenshot_step2_full_sk.jpg') }}" data-lightbox="photos">
                        <img src="{{ asset('images/member/screenshot_step2_sk.jpg') }}" class="img-fluid d-block mx-auto img-thumbnail xs-mb-20" alt="" data-aos="zoom-in">
                    </a>
                @else
                    <a href="{{ asset('images/member/screenshot_step2_full.jpg') }}" data-lightbox="photos">
                        <img src="{{ asset('images/member/screenshot_step2.jpg') }}" class="img-fluid d-block mx-auto img-thumbnail xs-mb-20" alt="" data-aos="zoom-in">
                    </a>
                @endif
            </div>

            <div class="col-12 col-lg-4">
                <h3 class="text-center color_primary">@lang('general.step') 3 <span class="popover-info" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="@lang('member/how.text4')"><i class="fas fa-info-circle"></i></span></h3>

                @if(App::getLocale() == 'sk')
                    <a href="{{ asset('images/member/screenshot_step3_full_sk.jpg') }}" data-lightbox="photos">
                        <img src="{{ asset('images/member/screenshot_step3_sk.jpg') }}" class="img-fluid d-block mx-auto img-thumbnail" alt="" data-aos="zoom-in">
                    </a>
                @else
                    <a href="{{ asset('images/member/screenshot_step3_full.jpg') }}" data-lightbox="photos">
                        <img src="{{ asset('images/member/screenshot_step3.jpg') }}" class="img-fluid d-block mx-auto img-thumbnail" alt="" data-aos="zoom-in">
                    </a>
                @endif
            </div>
        </div>
    </div>

    {{--  Sekcia 3 --}}
    <div class="container xs-pt-20 xs-pb-20 lg-pb-50">

        <div class="col-12 col-lg-9 offset-lg-1">

            {{-- Pool resources--}}
            <h2 class="mt-4">@lang('member/how.pooled_resources')</h2>
            <p>@lang('member/how.pooled_resources2')</p>


            <hr class="part primary">

            <h3 class="text-center">@lang('member/how.calc')</h3>
            {{--CALCULATOR PR--}}
            <div class="projectItem xs-mb-20 bg_secondary">
                <div class="row">
                    <div class="col">
                        <div class="xs-p-10 calculator">
                            <div class="tab-pane fade show calculator calculator-pr" id="pr-tab" role="tabpanel" aria-labelledby="pr-tab">
                                <input type="hidden" class="cal_price" value="5000">
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <div class="form-group">
                                            <label for="pr_number" class="col-form-label">@lang('member/invest/pr.number')</label>

                                            <input id="pr_number" type="number" class="form-control cal_number{{ $errors->has('pr.number') ? ' is-invalid' : '' }}" name="pr[number]" value="{{ old('pr.number') ?? 1 }}" min="1" step="1">
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="" class="col-form-label">@lang('member/invest/pr.investment')</label>

                                                    <input type="text" class="form-control cal_investment" value="&euro; 5 000" readonly>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="" class="col-form-label">@lang('member/invest/pr.interest')</label>

                                                    <input type="text" class="form-control cal_profit" value="&euro; 1 000" readonly>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="" class="col-form-label">@lang('member/invest/pr.quarterly')</label>

                                                    <input type="text" class="form-control cal_quarterly" value="&euro; 125,00" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4">
                                        <label for="">@lang('member/invest/pr.duration')</label>

                                        <div class="custom-control custom-radio xs-mb-10">
                                            <input class="custom-control-input cal_duration" type="radio" name="pr[duration]" id="pr1" value="2" checked>
                                            <label class="custom-control-label" for="pr1">
                                                @lang('member/invest/pr.2')
                                            </label>
                                        </div>

                                        <div class="custom-control custom-radio xs-mb-10">
                                            <input class="custom-control-input cal_duration" type="radio" name="pr[duration]" id="pr2" value="3">
                                            <label class="custom-control-label" for="pr2">
                                                @lang('member/invest/pr.3')
                                            </label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input cal_duration" type="radio" name="pr[duration]" id="pr3" value="4">
                                            <label class="custom-control-label" for="pr3">
                                                @lang('member/invest/pr.4')
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr class="part primary">
                                <p class="lead text-center">@lang('member/invest/pr.pooled')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  Sekcia  4 img --}}
    <div class="container-fluid bg_secondary xs-pt-20 xs-pb-20 lg-pb-50">
        <div class="row">
            <div class="col-12 col-lg-4">
                <h3 class="text-center color_primary">@lang('general.step') 1 <span class="popover-info" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="@lang('member/how.text2')"><i class="fas fa-info-circle"></i></span></h3>
                <a href="{{ asset('images/member/screenshot_step1_full_pr_' . App::getLocale() . '.jpg') }}" data-lightbox="photos">
                    <img src="{{ asset('images/member/screenshot_step1_pr_' . App::getLocale(). '.jpg') }}" class="img-fluid d-block mx-auto img-thumbnail xs-mb-20" alt="" data-aos="zoom-in">
                </a>
            </div>

            <div class="col-12 col-lg-4">
                <h3 class="text-center color_primary">@lang('general.step') 2 <span class="popover-info" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="@lang('member/how.text3')"><i class="fas fa-info-circle"></i></span></h3>

                @if(App::getLocale() == 'sk')
                    <a href="{{ asset('images/member/screenshot_step2_full_sk.jpg') }}" data-lightbox="photos">
                        <img src="{{ asset('images/member/screenshot_step2_sk.jpg') }}" class="img-fluid d-block mx-auto img-thumbnail xs-mb-20" alt="" data-aos="zoom-in">
                    </a>
                @else
                    <a href="{{ asset('images/member/screenshot_step2_full.jpg') }}" data-lightbox="photos">
                        <img src="{{ asset('images/member/screenshot_step2.jpg') }}" class="img-fluid d-block mx-auto img-thumbnail xs-mb-20" alt="" data-aos="zoom-in">
                    </a>
                @endif
            </div>

            <div class="col-12 col-lg-4">
                <h3 class="text-center color_primary">@lang('general.step') 3 <span class="popover-info" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="@lang('member/how.text4')"><i class="fas fa-info-circle"></i></span></h3>

                @if(App::getLocale() == 'sk')
                    <a href="{{ asset('images/member/screenshot_step3_full_sk.jpg') }}" data-lightbox="photos">
                        <img src="{{ asset('images/member/screenshot_step3_sk.jpg') }}" class="img-fluid d-block mx-auto img-thumbnail" alt="" data-aos="zoom-in">
                    </a>
                @else
                    <a href="{{ asset('images/member/screenshot_step3_full.jpg') }}" data-lightbox="photos">
                        <img src="{{ asset('images/member/screenshot_step3.jpg') }}" class="img-fluid d-block mx-auto img-thumbnail" alt="" data-aos="zoom-in">
                    </a>
                @endif
            </div>
        </div>


        <div class="text-center xs-mt-20 lg-mt-50">
            <a href="{{ route('member.home') }}" class="btn btn-secondary">@lang('public/nav.home')</a>

            <a href="{{ route('member.invest') }}" class="btn btn-primary">@lang('member/nav.invest')</a>
        </div>
    </div>
@endsection

@section('addJS')
    <script type="text/javascript" src="{{ mix('js/step1.js') }}"></script>
@endsection