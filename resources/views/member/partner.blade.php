@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Partner program')

@section('startBody')
    <div id="agreementModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Partner program agreement</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <h2 class="text-center xs-mb-20">@lang('member/partner.terms.text')</h2>

                    <p><strong>Company:</strong> CEE Real Estate Group s.r.o.,</p>
                    <p>Gorkeho 5, Bratislava, 81101, Slovak republic</p>
                    <p><strong>@lang('member/partner.terms.registrationNumber')</strong> </p>

                    <p>@lang('member/partner.terms.text2')</p>

                    <p>@lang('member/partner.terms.and')</p>

                    <p><strong>@lang('member/partner.terms.name')</strong> {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
                    <p><strong>Company:</strong> <span id="fillCompany">{{ Auth::user()->company }}</span></p>
                    <p><strong>E-mail:</strong> {{ Auth::user()->email }}</p>
                    <p><strong>Website:</strong> <span id="fillURL">{{ Auth::user()->url }}</span></p>

                    <p>@lang('member/partner.terms.text3')</p>

                    <h3>@lang('member/partner.terms.I')</h3>

                    <p class='text-justify'>@lang('member/partner.terms.IA')</p>
                    <p class='text-justify'>@lang('member/partner.terms.IB')</p>

                    <h3>@lang('member/partner.terms.1')</h3>

                    <p class='text-justify'>@lang('member/partner.terms.1A')</p>
                    <p class='text-justify'>@lang('member/partner.terms.1B')</p>
                    <p class='text-justify'>@lang('member/partner.terms.1C')</p>
                    <p class='text-justify'>@lang('member/partner.terms.1D')</p>
                    <p class='text-justify'>@lang('member/partner.terms.1E')</p>

                    <h3>@lang('member/partner.terms.2')</h3>

                    <p class='text-justify'>@lang('member/partner.terms.2A')</p>
                    <p class='text-justify'>@lang('member/partner.terms.2B')</p>

                    <h3>@lang('member/partner.terms.3')</h3>

                    <p class='text-justify'>@lang('member/partner.terms.3A')</p>
                    <p class='text-justify'>@lang('member/partner.terms.3B')</p>
                    <p class='text-justify'>@lang('member/partner.terms.3C')</p>
                    <p class='text-justify'>@lang('member/partner.terms.3D')</p>
                    <p class='text-justify'>@lang('member/partner.terms.3E')</p>
                    <p class='text-justify'>@lang('member/partner.terms.3F')</p>
                    <p class='text-justify'>@lang('member/partner.terms.3G')</p>
                    <p class='text-justify'>@lang('member/partner.terms.3H')</p>

                    <h3>@lang('member/partner.terms.4')</h3>

                    <p class='text-justify'>@lang('member/partner.terms.4text')</p>

                    <h3>@lang('member/partner.terms.5')</h3>

                    <p class='text-justify'>@lang('member/partner.terms.5A')</p>
                    <p class='text-justify'>@lang('member/partner.terms.5B')</p>
                    <p class='text-justify'>@lang('member/partner.terms.5C')</p>
                    <p class='text-justify'>@lang('member/partner.terms.5D')</p>

                    <h3>@lang('member/partner.terms.6')</h3>

                    <p class='text-justify'>@lang('member/partner.terms.6A')</p>
                    <p class='text-justify'>@lang('member/partner.terms.6B')</p>
                    <p class='text-justify'>@lang('member/partner.terms.6C')</p>

                    <h3>@lang('member/partner.terms.7')</h3>

                    <p class='text-justify'>@lang('member/partner.terms.7text')</p>

                    <h3>@lang('member/partner.terms.8')</h3>

                    <p class='text-justify'>@lang('member/partner.terms.8A')</p>
                    <p class='text-justify'>@lang('member/partner.terms.8B')</p>
                    <p class='text-justify'>@lang('member/partner.terms.8C')</p>

                    <h3>@lang('member/partner.terms.9')</h3>

                    <p class='text-justify'>@lang('member/partner.terms.9A').</p>
                    <p class='text-justify'>@lang('member/partner.terms.9B')</p>

                    <h3>@lang('member/partner.terms.10')</h3>

                    <p class='text-justify'>@lang('member/partner.terms.10A')</p>
                    <p class='text-justify'>@lang('member/partner.terms.10B')</p>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">@lang('general.close')</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container xs-mt-20 xs-mb-20 lg-mt-50 lg-mb-50">
        <h1>@lang('member/partner.heading')</h1>

        <h3>@lang('member/partner.text')</h3>

        <p>@lang('member/partner.text2')</p>

        <hr class="part primary">

        <h3>@lang('member/partner.text3')</h3>

        <p>@lang('member/partner.text4')</p>

        <hr class="part primary">

        <h3>@lang('member/partner.text5')</h3>

        <p>@lang('member/partner.text6')</p>

        <hr class="part primary">

        <h3>@lang('member/partner.text9')</h3>

        <p>@lang('member/partner.text10')</p>

        <ul>
            <li>@lang('member/partner.point')</li>

            <li>@lang('member/partner.point2')</li>

            <li>@lang('member/partner.point3')</li>

            <li>@lang('member/partner.point4')</li>

            <li>@lang('member/partner.point5')</li>

            <li>@lang('member/partner.point6')</li>

            <li>@lang('member/partner.point7')</li>

            <li>@lang('member/partner.point8')</li>

            <li>@lang('member/partner.point9')</li>

            <li>@lang('member/partner.point10')</li>

            <li>@lang('member/partner.point11')</li>

            <li>@lang('member/partner.point12')</li>

            <li>@lang('member/partner.point13')</li>

            <li>@lang('member/partner.point14')</li>
        </ul>

        <p>@lang('member/partner.text11')</p>

        <hr class="part primary">

        <h3>@lang('member/partner.text12')</h3>

        <p>@lang('member/partner.text13')</p>

        <hr class="part primary">

        <h3>@lang('member/partner.text14')</h3>

        <p>@lang('member/partner.text15')</p>

        <hr class="part primary">

        @role('partner')
            <p class="text-center"><a href="" data-toggle="modal" data-target="#agreementModal">Terms & conditions</a> of Partner program</p>
        @else
            <p>If you would like to become a CEE referral partner you will need to fill in this form below to set up your online
                partner program account.</p>

            <form action="{{ route('member.partnerPost') }}" method="POST" class="cee xs-mt-20">
                @csrf

                <input type="hidden" name="subject" value="CEE Partner program">

                <div class="form-group row">
                    <label for="company" class="col-md-4 col-form-label text-md-right">Company name</label>

                    <div class="col-md-6">
                        <input id="company" type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') }}" required>

                        @if ($errors->has('company'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label text-md-right">Company website</label>

                    <div class="col-md-6">
                        <input id="url" type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}" required>

                        @if ($errors->has('url'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-check text-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck1" required>

                    <label class="form-check-label" for="defaultCheck1">
                        I have read and agree with <a href="" data-toggle="modal" data-target="#agreementModal">terms & conditions</a>.
                    </label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary xs-mt-20">Submit</button>
                </div>
            </form>
        @endrole
    </div>
@endsection