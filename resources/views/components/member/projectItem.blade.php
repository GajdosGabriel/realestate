<div class="projectItem xs-mb-20">
    <div class="row calculator">
        <div class="col-12 col-lg-4">
            <img src="{{ asset('images/member/projectItem.jpg') }}" class="img-fluid d-block mx-auto" alt="">
        </div>

        <div class="col-12 col-lg-4">
            <div class="xs-p-10">
                <p>@lang('member/invest/step1.text')</p>

                <p>@lang('member/invest/step1.text2')</p>

                <p>@lang('member/invest/step1.text3')</p>

                <p class="xs-mb-5">@lang('member/invest/step1.ceeShares') <strong>51</strong></p>

                <p class="xs-mb-5">@lang('member/invest/step1.reservedShares') <strong>19</strong></p>

                <p class="xs-mb-5">@lang('member/invest/step1.availableShares') <strong>30</strong></p>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="xs-p-10">
                <p>
                    @lang('member/invest/step1.available') &euro; <strong>{{ number_format(900000, 0, ',', ' ') }}</strong><br>@lang('member/invest/step1.this')
                </p>

                <div class="calculator-tdo">
                    <label>@lang('member/invest/step1.shares')</label>

                    <div class="input-group">
                        <input type="number" class="form-control cal_shares" name="tdo[shares]" min="2" max="30" step="1" value="2">

                        <div class="input-group-append">
                            <span class="input-group-text addon-secondary">@lang('member/invest/step1.shares2')</span>
                        </div>
                    </div>

                    <label class="xs-mt-10">@lang('member/invest/step1.investment')</label>

                    <input type="text" class="form-control cal_investment" name="tdo[project][investment]" value="&euro; 60 000" readonly>

                    <label class="xs-mt-10">@lang('member/invest/step1.roi')</label>

                    <input type="text" class="form-control cal_roi" name="tdo[project][roi]" value="&euro; 286 000" readonly>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="custom-control custom-radio">
            <input type="radio" id="project_{{ $objProject->id }}" name="tdo[project]" class="custom-control-input" value="{{ $objProject->id }}" checked>
            <label class="custom-control-label" for="project_{{ $objProject->id }}">@lang('member/invest/step1.choose')</label>
        </div>
    </footer>
</div>