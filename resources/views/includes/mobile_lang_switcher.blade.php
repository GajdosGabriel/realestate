@if(App::getLocale() != 'en')
    <a class="text-shadow font-montserrat font-weight-bold d-md-none" href="{{ route('public.lang', ['lang' => 'en']) }}"><img src="{{ asset('images/flag_en.png') }}" alt=""> </a>
@endif

@if(App::getLocale() != 'sk')
    <a class="text-shadow font-montserrat font-weight-bold d-md-none" href="{{ route('public.lang', ['lang' => 'sk']) }}"><img src="{{ asset('images/flag_sk.png') }}" alt=""> </a>
@endif

@if(App::getLocale() != 'nl')
    <a class="text-shadow font-montserrat font-weight-bold d-md-none" href="{{ route('public.lang', ['lang' => 'nl']) }}"><img src="{{ asset('images/flag_nl.png') }}" alt=""> </a>
@endif
</br>