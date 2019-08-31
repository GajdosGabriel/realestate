<div class="js-cookie-consent cookie-consent">
    <div class="row">
        <div class="col-12 col-md-8 col-xl-10">
            <p class="cookie-consent__message small xs-mb-5 md-mb-0">@lang('legal/cookies.text')</p>
        </div>

        <div class="col-12 col-md-4 col-xl-2 text-right">
            <a href="{{ route('public.cookies') }}" class="btn btn-secondary btn-xs">@lang('general.learnMore')</a>

            <button class="btn btn-primary js-cookie-consent-agree btn-xs cookie-consent__agree">@lang('general.agree')</button>
        </div>
    </div>
</div>
