@extends('agent/_layout')

@section('addCSS')
    <meta http-equiv="refresh" content="60">
@endsection

@section('title', env('APP_NAME') . ' :: Agent area')

@section('content')
    <div class="container-fluid xs-pt-20 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <div id="adminPanel">
                    <div class="item">
                        <form action="{{ route('agent.users.home') }}" method="GET" class="form-inline cee">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search users" required>

                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="item">
                        <span class="text">
                            <i class="fas fa-user" data-toggle="tooltip" data-placement="top" title="Number of Users"></i> <span class="color_primary">{{ number_format($intTotalUsers, 0, '', ' ') }}</span>
                            </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row xs-mt-30">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="xs-mb-20">Newest users <span class="badge badge-secondary">{{ count($arrNewest) }}</span></h3>

                                <div class="xs-mb-20" style="height:200px">
                                    {!! $objNewestUsersChart->container() !!}
                                </div>

                                <ul class="list-group users">
                                    @foreach($arrNewest as $objUser)
                                        @component('components/agent/newestUser', ['objUser' => $objUser])@endcomponent
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="xs-mb-20">Most visited pages <span class="badge badge-secondary">{{ count($arrChartData) }}</span></h3>

                                <div style="height:200px">
                                    {!! $objChart->container() !!}
                                </div>

                                <table class="table table-sm table-striped table-bordered xs-mt-20 xs-mb-0">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th class="text-right">Visits</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($arrChartData as $key => $value)
                                        <tr>
                                            <td>{{ $key }}</td>
                                            <td class="text-right">{{ $value }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card xs-mt-30">
                    <div class="card-body xs-pb-0">
                        <h3 class="xs-mb-20">Roles <span class="badge badge-secondary">{{ count($arrRoles) }}</span></h3>

                        <div class="row">
                            @foreach($arrRoles as $objRole)
                                <div class="col-3 xs-pb-20">
                                    <a href="{{ route('agent.users.byRole', ['name' => $objRole->name]) }}" class="btn btn-block btn-secondary">{{ $objRole->name }} <span class="badge badge-light">{{ $objRole->users_count }}</span></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        @if(count($arrOnline) > 0)
                            <h3 class="xs-mb-20"><i class="fas fa-circle color_green"></i> Online users <span class="badge badge-secondary">{{ count($arrOnline) }}</span></h3>

                            <ul class="list-group users xs-mb-20">
                                @foreach($arrOnline as $objUser)
                                    @component('components/agent/onlineUser', ['objUser' => $objUser])@endcomponent
                                @endforeach
                            </ul>
                        @endif

                        <h3 class="xs-mb-20">Recent logins <span class="badge badge-secondary">{{ count($arrRecentLogins) }}</span></h3>

                        <ul class="list-group users">
                            @foreach($arrRecentLogins as $objActivity)
                                @component('components/agent/recentLogin', ['objActivity' => $objActivity])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('addJS')
    <script src="{{ mix('js/chart/Chart.min.js') }}"></script>
    {!! $objChart->script() !!}
    {!! $objNewestUsersChart->script() !!}
@endsection