@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Upload GIF')

@section('content')
    <div class="container xs-pt-20 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <h3>Upload GIF</h3>

                <form action="{{ route('admin.gif.newPost') }}" method="POST" id="uploadGifForm" class="cee" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <div class="form-group">
                                <label for="file">File</label>
                                <input type="file" class="form-control" name="file" id="file" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <footer class="card-footer text-right">
                <button type="submit" form="uploadGifForm" class="btn btn-primary">Upload</button>
            </footer>
        </div>
    </div>
@endsection