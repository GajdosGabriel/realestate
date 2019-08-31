@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Payments')

@section('startBody')
    @foreach($arrBankDetails as $objBankDetails)
        @if($objBankDetails != null)
            <div id="bd{{ $objBankDetails->id }}" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bank details</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <p><strong>IBAN:</strong> {{ $objBankDetails->iban }}</p>

                            <p><strong>Account holder name:</strong> {{ $objBankDetails->name }}</p>

                            <p><strong>Account holder address:</strong> {{ $objBankDetails->address }}</p>

                            <p><strong>Bank name:</strong> {{ $objBankDetails->bank_name }}</p>

                            <p><strong>Bank address:</strong> {{ $objBankDetails->bank_address }}</p>

                            <p><strong>BIC / SWIFT:</strong> {{ $objBankDetails->bic }}</p>
                        </div>

                        <div class="modal-footer d-none d-lg-flex">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('general.close')</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection

@section('content')
    <div class="container-fluid xs-pt-20">
        <div class="card">
            <div class="card-body">
                <div id="adminPanel">
                    <div class="item">
                        <h3>Payments <span class="badge badge-secondary">{{ $arrUsers->count() }}</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container xs-pb-50">
        <div class="card xs-mt-20 xs-mb-20">
            <div class="card-body">
                <ul class="list-group users">
                    @foreach($arrUsers as $objUser)
                        @component('components/admin/payment', [
                            'objUser' => $objUser,
                            'arrPayments' => $arrPayments
                        ])@endcomponent
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection