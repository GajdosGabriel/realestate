@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Hot leads')

@section('content')
    <div class="container-fluid xs-mt-20 xs-mb-20">
        <div class="row">
            <div class="col-6">
                <h1>Hot leads <span class="badge badge-secondary">{{ count($arrLeads) }} / {{ $arrLeads->total() }}</span></h1>
            </div>

            <div class="col-6 pagination-right">
                {{ $arrLeads->links() }}
            </div>
        </div>

        <ul class="list-group users xs-mt-20 xs-mb-20">
            @foreach($arrLeads as $objLead)
                @component('components/admin/lead', ['objLead' => $objLead])@endcomponent
            @endforeach
        </ul>

        <div class="pagination-center">
            {{ $arrLeads->links() }}
        </div>
    </div>
@endsection