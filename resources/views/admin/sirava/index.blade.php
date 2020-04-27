@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Šírava Park')

@section('content')
    <div class="container-fluid xs-pt-20">
        <div class="card">
            <div class="card-body">
                <div id="adminPanel">
                    <div class="item">
                        <h3>Šírava Park</h3>
                    </div>

                    <div class="item">
                        <form action="" method="GET" class="form-inline cee">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search users" minlength="3" required>

                                @if(isset($_GET['search']))
                                    <div class="input-group-append">
                                        <a href="{{ Request::url() }}" class="btn btn-outline-secondary" type="button"><i class="fas fa-times color_red"></i></a>
                                    </div>
                                @endif

                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="float-right">
                        <div class="item">
                            {{ $objPaginator->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row xs-mt-30 xs-mb-50">
            <div class="col-12 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <h4>Page visits <span class="badge badge-secondary">{{ count($arrData) }}</span></h4>

                        <div class="xs-mb-20" style="height:200px">
                            {!! $objChart->container() !!}
                        </div>

                        <table class="table table-sm table-striped table-bordered xs-mt-20">
                            <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th class="text-right">Visits</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($arrData as $data)
                                <tr>
                                    <td>{{ $data['page']['name'] }}</td>
                                    <td class="text-right">{{ $data['count'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs xs-mb-20">
                            <li class="nav-item">
                                <a class="nav-link active" href="">Glamping leads <span class="badge badge-secondary">{{ $objPaginator->total() }}</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.sirava.holiday') }}">Holiday leads</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.sirava.re') }}">Real Estate sign ups</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.sirava.thermalSpa') }}">Thermal Spa Leads</a>
                            </li>
                        </ul>

                        <table class="table table-sm table-striped table-bordered xs-mt-20">
                            <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>Interested in</th>
                                <th>Rent / buy</th>
                                <th>Buy from</th>
                                <th>Buy to</th>
                                <th>Rent from</th>
                                <th>Rent to</th>
                                <th>Comment</th>
                                <th>Created at</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($objPaginator as $lead)
                                <tr>
                                    <td>{{ $lead['name'] }}</td>
                                    <td>{{ $lead['email'] }}</td>
                                    <td>{{ $lead['phone'] }}</td>
                                    <td>{{ $lead['estate'] }}</td>
                                    <td>{{ $lead['interested'] }}</td>
                                    <td>{{ $lead['buy_from'] }}</td>
                                    <td>{{ $lead['buy_to'] }}</td>
                                    <td>{{ $lead['rent_from'] }}</td>
                                    <td>{{ $lead['rent_to'] }}</td>
                                    <td>{{ $lead['comment'] }}</td>
                                    <td>{{ date('j.n.Y H:i', strtotime($lead['created_at'])) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="pagination-center">
                            {{ $objPaginator->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('addJS')
    <script src="{{ mix('js/chart/Chart.min.js') }}"></script>
    {!! $objChart->script() !!}
@endsection