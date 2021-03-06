@extends('agent/_layout')

@section('title', env('APP_NAME') . ' :: Agent area - Users by role')

@section('content')
    <div class="container xs-pt-20 xs-pb-50">
        <h3>Select users by role</h3>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    @foreach($arrRoles as $objRole)
                        <div class="col-12 col-lg-3 xs-pb-20">
                            <a href="{{ route('agent.users.byRole', ['name' => $objRole->role->name]) }}" class="btn btn-secondary btn-block">{{ $objRole->role->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection