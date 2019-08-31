@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Articles - Edit article')

@section('addCSS')
    <link rel="stylesheet" href="{{ mix('css/summernote/summernote-bs4.css') }}">
@endsection

@section('content')
    <div class="container xs-pt-20 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <h3>Edit article</h3>

                <form action="{{ route('admin.articles.articleEditPost') }}" id="articleEditForm" method="POST" class="cee">
                    @include('includes/errorList')

                    @csrf

                    <input type="hidden" name="id" value="{{ $objArticle->id }}">

                    <div class="form-group">
                        <label for="title">Title</label>

                        <input type="text" id="title" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') ?? $objArticle->title }}" maxlength="100" autofocus required>
                    </div>

                    <div class="form-group">
                        <label for="body">Body</label>

                        <textarea id="body" name="body" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" required>{{ old('body') ?? $objArticle->body }}</textarea>
                    </div>
                </form>
            </div>

            <footer class="card-footer text-right">
                <button form="articleEditForm" type="submit" class="btn btn-primary">SAVE</button>
            </footer>
        </div>
    </div>
@endsection

@section('addJS')
    <script type="text/javascript" src="{{ mix('js/summernote/summernote-bs4.min.js') }}"></script>

    <script type="text/javascript">
        function uploadImage(image) {
            var data = new FormData();
            data.append("image", image);
            $.ajax({
                url: '/api/resize-image',
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "post",
                success: function(url) {
                    var image = $('<img>').attr('src', url);
                    $('#body').summernote("insertNode", image[0]);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }

        $('#body').summernote({
            tabsize: 4,
            height: 400,
            fontNames: ['Montserrat', 'PT Serif', 'Arial'],
            disableDragAndDrop: true,
            callbacks: {
                onImageUpload: function(image) {
                    uploadImage(image[0]);
                }
            }
        });

        $('#sn-checkbox-open-in-new-window').checked = true;
    </script>
@endsection