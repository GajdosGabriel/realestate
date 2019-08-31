@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Reminder edit')

@section('addCSS')
    <link rel="stylesheet" href="{{ mix('css/tempusdominus/tempusdominus-bootstrap-4.css') }}">
@endsection

@section('content')
    <div class="container xs-pt-20 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.users.user', ['id' => $objReminder->user_id]) }}"><- Back to user details</a>

                <h3 class="xs-mt-20">Edit reminder</h3>

                <form action="{{ route('admin.reminders.editPost') }}" id="reminderEditForm" method="POST" class="cee">
                    @include('includes/errorList')

                    @csrf

                    <input type="hidden" name="id" value="{{ $objReminder->id }}">

                    <input type="hidden" name="user_id" value="{{ $objReminder->user_id }}">

                    <div class="form-group">
                        <label for="text" class="d-none">Text</label>

                        <textarea class="form-control" id="text" name="text" rows="2" maxlength="300" required>{{ old('text') ?? $objReminder->text }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="agent_id">Agent</label>

                        <select id="agent_id" name="agent_id" class="form-control" required>
                            <option value="">Agent</option>
                            @foreach($arrAgents as $objAgent)
                                @if($objAgent->id == $objReminder->agent_id)<option value="{{ $objAgent->id }}" selected>{{ $objAgent->name }} {{ $objAgent->surname }}</option>
                                @else<option value="{{ $objAgent->id }}">{{ $objAgent->name }} {{ $objAgent->surname }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="datetime">Datetime</label>

                        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                            <input type="text" name="datetime" class="form-control datetimepicker-input" data-target="#datetimepicker1" value="{{ old('datetime') ?? $objReminder->datetime }}">
                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                <div class="input-group-text btn-secondary"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <footer class="card-footer text-right">
                <button type="submit" form="reminderEditForm" class="btn btn-primary">SAVE</button>
            </footer>
        </div>
    </div>
@endsection

@section('addJS')
    <script type="text/javascript" src="{{ mix('js/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/tempusdominus/tempusdominus-bootstrap-4.min.js') }}"></script>

    <script type="text/javascript">
        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:00',
            sideBySide: true
        });
    </script>
@endsection