@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Order')

@section('content')
    <div class="container-fluid xs-pt-20 xs-pb-20 lg-pb-50">
        <a href="{{ route('member.investments') }}"><- @lang('member/invest/order.back')</a>

        <h1 class="xs-mt-20">@lang('member/invest/order.details')</h1>

        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <p class="bg_secondary xs-p-20">
                            @lang('member/invest/order.id') {{ $objOrder->id }}<br>
                            @lang('member/invest/order.ordered') {{ date('j.n.Y H:i', strtotime($objOrder->created_at)) }}<br>
                        </p>

                        <h3>@lang('member/invest/step1.personal')</h3>

                        <p><strong>@lang('form.fullName'):</strong> {{ $objOrder->name }} {{ $objOrder->surname }}</p>

                        <p><strong>E-mail:</strong> <a href="mailto:{{ $objOrder->email }}">{{ $objOrder->email }}</a></p>

                        <p><strong>@lang('form.phone'):</strong> <a href="tel:+{{ $objOrder->phone_code }}{{ $objOrder->phone }}">+{{ $objOrder->phone_code }} {{ $objOrder->phone }}</a></p>

                        <p><strong>@lang('form.govID'):</strong> {{ $objOrder->government_id }}</p>

                        <p><strong>@lang('public/contact.address'):</strong> {{ $objOrder->street }}, {{ $objOrder->city }}, {{ $objOrder->zip }}</p>

                        <p><strong>@lang('form.region'):</strong> {{ $objOrder->region }}</p>

                        <p><strong>@lang('form.country'):</strong> {{ $objOrder->country }}</p>

                        <p><strong>@lang('form.nationality'):</strong> {{ $objOrder->nationality }}</p>

                        @if($objOrder->company != null)
                            <hr>

                            <h3>@lang('member/invest/step1.company')</h3>

                            <p><strong>@lang('form.name'):</strong> {{ $objOrder->company->name }}</p>

                            <p><strong>@lang('form.companyID'):</strong> {{ $objOrder->company->id_number }}</p>

                            <p><strong>@lang('public/contact.address'):</strong> {{ $objOrder->company->street }}, {{ $objOrder->company->city }}, {{ $objOrder->company->zip }}</p>

                            <p><strong>@lang('form.region'):</strong> {{ $objOrder->company->region }}</p>

                            <p><strong>@lang('form.country'):</strong> {{ $objOrder->company->country }}</p>
                        @endif

                        @if($objOrder->joint != null)
                            <hr>

                            <h3>@lang('member/invest/step1.joint')</h3>

                            <p><strong>@lang('form.fullName'):</strong> {{ $objOrder->joint->name }}</p>

                            <p><strong>@lang('form.govID'):</strong> {{ $objOrder->joint->government_id }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3>@lang('member/invest/step1.pr')</h3>

                        <p><strong>@lang('member/invest/order.duration')</strong> {{ $objOrder->pr->duration }} @lang('member/invest/order.years2')</p>

                        <p><strong>@lang('member/invest/order.serials') ({{ $objOrder->pr->number }}):</strong>
                            {{ $objOrder->pr->serial_numbers }}
                        </p>

                        <p><strong>@lang('member/invest/order.investment')</strong> &euro; {{ number_format($objOrder->pr->total_investment, 0, ',', ' ') }}</p>

                        <p><strong>@lang('member/invest/order.totalInterest')</strong> &euro; {{ number_format($objOrder->pr->total_interest, 0, ',', ' ') }}</p>

                        <p><strong>@lang('member/invest/order.quarterlyInterest')</strong> &euro; {{ number_format($objOrder->pr->interest, 2, ',', ' ') }}</p>

                        <hr class="part primary">

                        <h4>@lang('member/invest/order.calendar')</h4>

                        <table class="table table-striped table-bordered table-sm">
                            <thead>
                            <tr>
                                <th>@lang('member/invest/order.date')</th>

                                <th class="text-right">@lang('member/invest/order.amount')</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($objOrder->pr->calendar() as $pay)
                                <tr>
                                    <td>{{ date('j.n.Y', strtotime($pay['date'])) }}</td>

                                    <td class="text-right">&euro; {{ $pay['amount'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3>@lang('member/invest/order.ceeBank')</h3>

                        <table class="table table-borderless font-montserrat">
                            <tr>
                                <td>@lang('member/invest/step3.iban')</td>

                                <td class="h5 font-weight-bold">
                                    SK91 7500 0000 0040 2612 5125
                                </td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.holderName')</td>

                                <td class="font-weight-bold">CEE Real Estate Group s.r.o.</td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.holderAddress')</td>

                                <td class="font-weight-bold">Gorkého 5, 811 01, Bratislava</td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.bankName')</td>

                                <td class="font-weight-bold">Československá obchodná banka, a.s.</td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.bankAddress')</td>

                                <td class="font-weight-bold">Žižkova 11, 811 02, Bratislava </td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.bic')</td>

                                <td class="font-weight-bold">CEKOSKBX</td>
                            </tr>
                        </table>

                        <p class="font-montserrat">@lang('member/invest/step3.amount')</p>

                        <p class="font-montserrat font-weight-bold">&euro; {{ number_format($objOrder->pr->number * 5000, 2, ',', ' ') }}</p>

                        <p class="font-montserrat">@lang('member/invest/step3.reason')</p>

                        <p class="font-montserrat font-weight-bold">@lang('member/invest/step3.pr') {{ $objOrder->pr->serial_numbers }}

                        <hr class="part primary">

                        <h3>@lang('member/invest/step3.credit')</h3>

                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                            <input type="hidden" name="cmd" value="_s-xclick">

                            <input type="hidden" name="hosted_button_id" value="5PTNLZ5YEZGZ8">

                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection