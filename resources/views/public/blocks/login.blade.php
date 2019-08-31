<div id="loginBlock" class="bg_secondary xs-pt-20 xs-pb-20 lg-pt-50 lg-pb-50">
    <div class="container">
        <h2 class="font-pt-serif xs-mb-20 text-center">@lang('public/login.text')</h2>

        <div class="text-center xs-mt-20 lg-mt-50">
            @if(Auth::guest())
                <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#loginModal">@lang('public/nav.logIn')</a>

                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">@lang('public/nav.signUp')</a>
            @else
                <p class="text-center lead">@lang('public/login.text2')</p>

                <a href="{{ route('member.home') }}" class="btn btn-primary">@lang('public/login.text3')</a>
            @endif
        </div>
    </div>
</div>