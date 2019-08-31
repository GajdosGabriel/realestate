@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Roles')

@section('startBody')
    @foreach($arrRoles as $objRole)
        @component('components/admin/roleModal', ['objRole' => $objRole])@endcomponent
    @endforeach
@endsection

@section('content')
    <div class="container-fluid xs-pt-20">
        <div class="card">
            <div class="card-body">
                <div id="adminPanel">
                    <div class="item">
                        <h3>Roles</h3>
                    </div>

                    <div class="float-right">
                        <div class="item">
                            <a href="{{ route('admin.roles.new') }}" class="btn btn-sm btn-secondary">New role</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container xs-mt-30 xs-pb-50">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group users">
                            @foreach($arrRoles as $objRole)
                                @component('components/admin/roleItem', ['objRole' => $objRole])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            {!! $objChart->container() !!}
                        </div>

                        <table class="table table-sm table-striped table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th class="text-right">Users</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($arrRoles->sortBy('users_count')->reverse() as $objRole)
                                <tr>
                                    <td>{{ $objRole->name }}</td>
                                    <td class="text-right">{{ $objRole->users_count }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('addJS')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    {!! $objChart->script() !!}
@endsection