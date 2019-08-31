@extends('agent/_layout')

@section('title', env('APP_NAME') . ' :: Agent area - Comment edit')

@section('content')
    <div class="container xs-pt-20 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('agent.users.user', ['id' => $objComment->user->id]) }}"><- Back to user details</a>

                <h3 class="xs-mt-20">Edit comment</h3>

                <form action="{{ route('agent.comments.editPost') }}" id="commentEditForm" method="POST" class="cee">
                    @include('includes/errorList')

                    @csrf

                    <input type="hidden" name="id" value="{{ $objComment->id }}">

                    <input type="hidden" name="user_id" value="{{ $objComment->user->id }}">

                    <input type="hidden" name="author_id" value="{{ $objComment->author->id }}">

                    <div class="form-group">
                        <label for="text" class="d-none">Text</label>

                        <textarea class="form-control" id="text" name="text" rows="4" maxlength="300" required>{{ old('text') ?? $objComment->text }}</textarea>
                    </div>

                    <div class="custom-control text-center custom-checkbox">
                        <input type="checkbox" id="note" name="note" class="custom-control-input" value="1"{{ $objComment->note == 1 ? ' checked' : '' }}>
                        <label for="note" class="custom-control-label">Note</label>
                    </div>
                </form>
            </div>

            <footer class="card-footer text-right">
                <button type="submit" form="commentEditForm" class="btn btn-primary">SAVE</button>
            </footer>
        </div>
    </div>
@endsection