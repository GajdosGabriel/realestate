@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - ')

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/pooled/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>Pooled financial and management resources</h1>
            </div>
        </div>
    </div>

    <div class="container xs-mt-20 xs-mb-20 lg-mb-50">
        <p>CEE Real Estate Group investment firm may offer investors the opportunity to join in pooled financial resources. Choosing to participate in a firm’s joint funds can give investors access to investments that would be beyond their means individually. An investor might obtain fractional ownership in a luxury apartment tower, for instance.</p>

        <p>Even without participating in a joint fund, an investor might become the co-owner of a property or have several units within a property, yet still benefit from the management provided by the firm. Often investors benefit from shared liabilities too, with individual holdings included in a joint fund to guarantee income in the event of vacancies, and umbrella insurance coverage provided by the firm.</p>

        <hr class="part primary">

        <h2 class="text-center">CERTIFICATE FOR EXECUTION BY HIGH NET WORTH INDIVIDUALS</h2>

        <p>I make this statement so that I can receive promotional communications which are exempt from the restriction on the promotion of non-readily realisable securities or promotion of non-mainstream pooled investments.</p>

        <p>The exemption relates to certified high net worth investors and I declare that I qualify as such because at least one of the following applies to me:</p>

        <p>I had, throughout the financial year immediately preceding the date below, an annual income to the value of &pound; / &euro; / &dollar; 100,000 or more.</p>

        <p>I held, throughout the financial year immediately preceding the date below, net assets to the value of &pound; / &euro; / &dollar; 250,000 or more. Net assets for these purposes do not include:</p>

        <ul class="list-unstyled">
            <li>(a) the property which is my primary residence or any money raised through a loan secured on that property.</li>

            <li>(b) any rights of mine under a qualifying contract of insurance. Or</li>

            <li>(c) any benefits (in the form of pensions or otherwise) which are payable on the termination of my service or on my death or retirement and to which I am (or my dependants are), or may be, entitled.</li>
        </ul>

        <p>I am aware that CEE Real Estate s.r.o. invest in real estate projects is not regulated by any security commission and do not provide financial advice.</p>

        <p>I accept that the investments to which the promotions will relate may expose me to a significant risk of losing all of the money or other property invested. I am aware that it is open to me to seek advice from an authorised person who specialises in advising on investments.</p>

        @role('hni')
            <hr class="part primary">

            <p class="lead text-center">You have already filled the form as High Net Worth Individual.</p>
        @else
            <form action="{{ route('member.pooled.formPost') }}" method="POST" class="cee bg_secondary xs-p-20">
                <p class="text-center lead">PLEASE NOTE THAT BY COMPLETING THIS FORM YOU ARE NOT COMMITTED TO BUY ANYTHING.</p>

                <p class="text-center font-montserrat font-weight-bold">The form below has been pre-filled with your account details.</p>

                <p class="text-center font-montserrat font-weight-bold">If you want to change any of these details, you can do it on <a href="{{ route('member.account') }}">account page</a>.</p>

                @csrf

                <input type="hidden" name="subject" value="CEE Real Estate :: Pooled resources - HNI">

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="name" value="{{ Auth::user()->name }}" maxlength="30" required readonly>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input type="text" id="surname" class="form-control" name="surname" value="{{ Auth::user()->surname }}" maxlength="50" required readonly>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" class="form-control" name="email" value="{{ Auth::user()->email }}" maxlength="70" required readonly>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>

                    <div class="input-group">
                        <input type="text" id="phone_code" class="form-control" name="phone_code" value="{{ Auth::user()->phone_code }}" maxlength="4" required readonly>

                        <div class="input-group-append">
                            <input id="phone" type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" maxlength="20" required readonly>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="country">Country</label>

                    <input type="text" id="country" class="form-control" name="country" value="{{ Auth::user()->country }}" maxlength="4" required readonly>
                </div>

                <div class="form-group form-check text-center">
                    <input type="checkbox" class="form-check-input" name="check" id="check" required>
                    <label class="form-check-label" for="check">To the Directors of CEE Real Estate s.r.o. I MAKE THIS DECLARATION AS A HIGH NET WORTH INVESTOR</label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        @endrole
    </div>
@endsection