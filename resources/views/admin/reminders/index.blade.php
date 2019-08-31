@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Reminders')

@section('content')
    <div class="container-fluid xs-pt-20 xs-pb-50">
        <div class="card xs-mb-30">
            <div class="card-body">
                <div id="adminPanel">
                    <div class="item">
                        <h3>Reminders</h3>
                    </div>

                    <div class="item">
                        <form action="" method="GET" class="cee">
                            <div class="input-group">
                                <select name="filter" class="custom-select">
                                    @foreach($arrAgents as $objAgent)
                                        <option value="{{ $objAgent->id }}">{{ $objAgent->name }} {{ $objAgent->surname }}</option>
                                    @endforeach
                                </select>

                                @if(isset($_GET['filter']))
                                    <div class="input-group-append">
                                        <a href="{{ Request::url() }}" class="btn btn-outline-secondary" type="button"><i class="fas fa-times color_red"></i></a>
                                    </div>
                                @endif

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-outline-secondary">SELECT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Missed</h3>

                        <ul class="list-group users">
                            @foreach($arrMissed as $objReminder)
                                @component('components/admin/reminderDetailed', ['objReminder' => $objReminder])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Today</h3>

                        <ul class="list-group users">
                            @foreach($arrToday as $objReminder)
                                @component('components/admin/reminderDetailed', ['objReminder' => $objReminder])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Future</h3>

                        <ul class="list-group users">
                            @foreach($arrFuture as $objReminder)
                                @component('components/admin/reminderDetailed', ['objReminder' => $objReminder])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection