@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Order')

@section('content')
    <div class="container-fluid xs-pt-20 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <div id="adminPanel">
                    <div class="item d-flex justify-content-between align-items-center">
                        <h3>Order details</h3>

                        @role('admin')
                        <a href="#" data-toggle="modal" data-target="#delete">
                            <i class="far fa-trash-alt"></i>
                        </a>
                        @endrole
                    </div>
                </div>
            </div>
        </div>

        <div class="row xs-mt-30">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h4>General</h4>

                        <p class="bg_secondary xs-p-20">
                            Order ID: {{ $objOrder->id }}<br>
                            Ordered at: {{ date('j.n.Y H:i', strtotime($objOrder->created_at)) }}<br>
                            Order belongs to account <a href="{{ route('admin.users.user', ['id' => $objOrder->user->id]) }}">{{ $objOrder->user->name }} {{ $objOrder->user->surname }}</a>
                        </p>

                        <h4>Personal details</h4>

                        <p><strong>Full name:</strong> {{ $objOrder->name }} {{ $objOrder->surname }}</p>

                        <p><strong>E-mail:</strong> <a href="mailto:{{ $objOrder->email }}">{{ $objOrder->email }}</a></p>

                        <p><strong>Phone:</strong> <a href="tel:+{{ $objOrder->phone_code }}{{ $objOrder->phone }}">+{{ $objOrder->phone_code }} {{ $objOrder->phone }}</a></p>

                        <p><strong>Government ID:</strong> {{ $objOrder->government_id }}</p>

                        <p><strong>Address:</strong> {{ $objOrder->street }}, {{ $objOrder->city }}, {{ $objOrder->zip }}</p>

                        <p><strong>Region:</strong> {{ $objOrder->region }}</p>

                        <p><strong>Country:</strong> {{ $objOrder->country }}</p>

                        <p><strong>Nationality:</strong> {{ $objOrder->nationality }}</p>

                        @if($objOrder->company != null)
                            <hr>

                            <h4>Company details</h4>

                            <p><strong>Name</strong>: {{ $objOrder->company->name }}</p>

                            <p><strong>ID</strong>: {{ $objOrder->company->id_number }}</p>

                            <p><strong>Address</strong>: {{ $objOrder->company->street }}, {{ $objOrder->company->city }}, {{ $objOrder->company->zip }}</p>

                            <p><strong>Region</strong>: {{ $objOrder->company->region }}</p>

                            <p><strong>Country</strong>: {{ $objOrder->company->country }}</p>
                        @endif

                        @if($objOrder->joint != null)
                            <hr>

                            <h4>Joint details</h4>

                            <p><strong>Full name</strong>: {{ $objOrder->joint->name }}</p>

                            <p><strong>Government ID</strong>: {{ $objOrder->joint->government_id }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        @if($objOrder->tdo)
                            <h4>Shareholder</h4>

                            <img src="https://www.siravapark.com/images/sp/3.jpg" class="img-fluid d-block xs-mb-20" alt="">

                            <p><strong>Project name</strong>: {{ $objOrder->tdo->project->name }}</p>

                            <p><strong>Location</strong>: {{ $objOrder->tdo->project->location }}</p>

                            <p><strong>Total investment</strong>: &euro; {{ number_format($objOrder->tdo->project->total_investment, 0, '', ' ') }}</p>

                            <p><strong>Shares</strong>: {{ $objOrder->tdo->shares }}</p>

                            <p class="xs-mb-0"><strong>Investment</strong>: &euro; {{ number_format($objOrder->tdo->investment, 0, '', ' ') }}</p>
                        @elseif($objOrder->sp)
                            <h4>Silent Partnership</h4>
    
                            <img src="https://www.siravapark.com/images/sp/3.jpg" class="img-fluid d-block xs-mb-20" alt="">
    
                            <p><strong>Project name</strong>: {{ $objOrder->sp->project->name }}</p>
    
                            <p><strong>Location</strong>: {{ $objOrder->sp->project->location }}</p>
    
                            <p><strong>Total investment</strong>: &euro; {{ number_format($objOrder->sp->project->total_investment, 0, '', ' ') }}</p>
    
                            <p><strong>Shares</strong>: {{ $objOrder->sp->shares }}</p>
    
                            <p class="xs-mb-0"><strong>Investment</strong>: &euro; {{ number_format($objOrder->sp->investment, 0, '', ' ') }}</p>
                        @elseif($objOrder->pr)
                            <h4>Pooled resources</h4>

                            <p><strong>Duration</strong>: {{ $objOrder->pr->duration }} years</p>

                            <p><strong>Serial numbers ({{ $objOrder->pr->number }})</strong>:
                                {{ $objOrder->pr->serial_numbers }}
                            </p>

                            <p><strong>Total investment</strong>: &euro; {{ number_format($objOrder->pr->total_investment, 0, ',', ' ') }}</p>

                            <p><strong>Total interest</strong>: &euro; {{ number_format($objOrder->pr->total_interest, 0, ',', ' ') }}</p>

                            <p><strong>Quarterly interest</strong>: &euro; {{ number_format($objOrder->pr->interest, 2, ',', ' ') }}</p>

                            <hr class="part primary">

                            <h4>Payment calendar</h4>

                            <table class="table table-striped table-bordered table-sm">
                                <thead>
                                <tr>
                                    <th>Date</th>

                                    <th class="text-right">Amount</th>
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
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Options</h4>

                        <a href="{{ route('admin.orders.download-contract', ['id' => $objOrder->id]) }}" class="btn btn-primary btn-block">Download contract</a>

                        @if($objOrder->tdo)
                            <h4 class="xs-mt-20">@lang('member/invest/order.notary')</h4>

                            <a href="{{ route('member.orders.annex', ['id' => $objOrder->id, 'number' => 1]) }}" class="btn btn-secondary">@lang('member/invest/order.annex') 1</a>

                            <a href="{{ route('member.orders.annex', ['id' => $objOrder->id, 'number' => 2]) }}" class="btn btn-secondary">@lang('member/invest/order.annex') 2</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @component('components.modal.delete')
    @slot('bodyText') Do you really want to delete a user's order <strong>{{ $objOrder->name }} {{ $objOrder->surname }}</strong> @endslot
    @slot('actionLink') {{ route('admin.orders.delete', [ $objOrder->id])  }} @endslot
    @endcomponent

@endsection