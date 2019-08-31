@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - GIFs')

@section('content')
    <div class="container-fluid xs-pt-20">
        <div class="card">
            <div class="card-body">
                <div id="adminPanel">
                    <div class="item">
                        <h3>GIFs</h3>
                    </div>

                    <div class="float-right">
                        <div class="item">
                            <a href="{{ route('admin.gif.new') }}" class="btn btn-sm btn-secondary">Upload GIF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container xs-mt-30 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <td>Image</td>

                        <td>URL</td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($arrGifs as $strGif)
                        <tr>
                            <td style="width:50%"><img src="{{ asset('uploads/' . $strGif) }}" class="img-fluid d-block" alt=""></td>

                            <td>https://www.cee-realestate.com/uploads/{{ $strGif }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection