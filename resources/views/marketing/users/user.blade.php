@extends('marketing/_layout')

@section('title', env('APP_NAME') . ' :: Marketing area - User')

@section('content')
    <div class="container-fluid xs-pt-20 xs-pb-50">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="">General</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('marketing.users.userActivity', ['id' => $objUser->id]) }}">Activity</a>
            </li>
        </ul>

        <div class="row xs-mt-30">
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="xs-mb-20">General</h3>

                        <h2 class="color_primary">{{ $objUser->id }}</h2>

                        @if($objUser->referral_id != null)<p><strong>Referral:</strong> <a href="{{ route('marketing.users.user', ['id' => $objUser->referral_id]) }}">{{ $objUser->referral->id }}</a></p>@endif

                        <p><strong>Country:</strong> {{ $objUser->country }}</p>

                        <p><strong>Status:</strong> @component('components/marketing/userStatus', ['id' => $objUser->status])@endcomponent</p>

                        <p><strong>Created at:</strong> {{ date('j.n.Y H:i', strtotime($objUser->created_at)) }}</p>

                        <p><strong>Roles:</strong>
                            @foreach($objUser->roles as $objRole)
                                @component('components/admin/roleBadge', ['objRole' => $objRole])@endcomponent
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="xs-mb-20">Last visited pages <span class="badge badge-secondary">{{ count($objUser->lastPages) }}</span></h3>

                        <ul class="list-group users">
                            @foreach($objUser->lastPages as $objActivity)
                                @component('components/admin/userActivity', ['objActivity' => $objActivity])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="xs-mb-20">Comments <span class="badge badge-secondary">{{ count($objUser->comments) }}</span></h3>

                        <ul class="list-group users">
                            @foreach($objUser->comments as $objComment)
                                @component('components/marketing/comment', ['objComment' => $objComment])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection