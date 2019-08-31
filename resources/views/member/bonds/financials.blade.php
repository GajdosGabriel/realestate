@extends('member/bonds/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Real estate bonds - Financials')

@section('content')
    <div class="container xs-mt-20 xs-mb-20 lg-mt-50 lg-mb-50">
        <div id="calculator" class="cee">
            <h1>Case study</h1>

            <h4 class="xs-mt-20">How many bonds do you want to buy?</h4>

            <p>The value of one bond is € 5 000,-</p>

            <div class="row xs-mb-20 md-mb-50">
                <div class="col-5">
                    <input type="number" id="number" class="form-control input" value="1" min="1">
                </div>

                <div class="col-2">
                    <p class="text-center"><strong>=</strong></p>
                </div>

                <div class="col-5">
                    <input type="text" id="value" class="form-control" value="&euro; 5 000" disabled>
                </div>
            </div>

            <hr class="part primary">

            <h4 class="xs-mt-20 md-mt-50">For how many years do you want to invest?</h4>

            <div class="row xs-mb-20 md-mb-50">
                <div class="col-5">
                    <select id="duration" class="form-control input">
                        <option value="8">3 years</option>
                        <option value="9.5">5 years</option>
                        <option value="11">7 years</option>
                    </select>
                </div>

                <div class="col-2">
                    <p class="text-center"><strong>=</strong></p>
                </div>

                <div class="col-5">
                    <input type="text" id="percent" class="form-control" value="8% p.a." disabled>
                </div>
            </div>

            <hr class="part primary">

            <div class="row xs-mt-20 md-mt-50 xs-mb-20 md-mb-50">
                <div class="col-12 col-lg-6">
                    <h4>Your profit together is:</h4>

                    <input type="text" id="profit" class="form-control gold color_white" value="&euro; 1 200" disabled>
                </div>

                <div class="col-12 col-lg-6">
                    <h4>CEE pays you monthly:</h4>

                    <input type="text" id="monthly" class="form-control gold color_white" value="&euro; 33,33" disabled>
                </div>
            </div>

            <p class="text-center xs-mt-20">At the end of the investment, you will get your investment back. Or you can continue investing.</p>
        </div>
    </div>
@endsection

@section('addJS')
    <script type="text/javascript" src="{{ asset('js/bondCalculator.js') }}"></script>
@endsection