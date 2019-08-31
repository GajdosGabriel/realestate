@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Articles - Edit article')

@section('addCSS')
    <link rel="stylesheet" href="{{ asset('css/summernote-bs4.css') }}">
@endsection

@section('content')
    <div class="container xs-mt-20 xs-mb-20">
        <h1>Edit article</h1>

        <form action="{{ route('admin.articleEditPost') }}" method="POST" class="cee">
            @csrf

            <input type="hidden" name="id" value="{{ $objArticle->id }}">

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') ?? $objArticle->title }}" maxlength="100" autofocus required>

                @if ($errors->has('title'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" required>{{ old('body') ?? $objArticle->body }}</textarea>

                @if ($errors->has('body'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
        </form>
    </div>
@endsection

@section('addJS')
    <script type="text/javascript" src="{{ asset('js/summernote-bs4.min.js') }}"></script>

    <script type="text/javascript">
        $('#body').summernote({
            tabsize: 4,
            height: 500,
            fontNames: ['Montserrat', 'PT Serif', 'Arial'],
            disableDragAndDrop: true
        });
    </script>
@endsection