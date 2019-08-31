@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Contracts')

@section('content')
    <div class="container xs-pt-20 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <h3>Preview of contract</h3>

                <form action="{{ route('admin.contracts.show') }}" id="contractPreviewForm" method="POST" class="cee">
                    @csrf

                    <label for="">Type</label>

                    <div class="custom-control custom-radio xs-mb-10">
                        <input class="custom-control-input" type="radio" name="type" id="type1" value="pr" checked>
                        <label class="custom-control-label" for="type1">
                            Pooled Resources
                        </label>
                    </div>

                    <div class="custom-control custom-radio xs-mb-10">
                        <input class="custom-control-input" type="radio" name="type" id="type2" value="tdo">
                        <label class="custom-control-label" for="type2">
                            Title Deed Ownership
                        </label>
                    </div>
                </form>
            </div>

            <footer class="card-footer text-right">
                <button type="submit" form="contractPreviewForm" class="btn btn-primary">Submit</button>
            </footer>
        </div>
    </div>
@endsection