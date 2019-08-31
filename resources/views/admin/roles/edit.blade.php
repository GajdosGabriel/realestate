@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Roles - Edit')

@section('content')
    <div class="container xs-pt-20 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <h3>Edit role</h3>

                <div class="col-12 col-lg-6 offset-lg-3">
                    <form action="{{ route('admin.roles.editPost') }}" id="roleEditForm" method="POST" class="cee">
                        @include('includes/errorList')

                        @csrf

                        <input type="hidden" name="id" value="{{ $objRole->id }}">

                        <div class="form-group">
                            <label for="name">Name</label>

                            <input type="text" class="form-control" id="name" name="name" maxlength="20" value="{{ $objRole->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>

                            <input type="text" class="form-control" id="description" name="description" maxlength="100" value="{{ $objRole->description }}">
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="bg_color">Background color</label>

                                    <input type="color" class="form-control color" id="bg_color" name="bg_color" maxlength="20" value="{{ $objRole->bg_color }}" required>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="color">Text color</label>

                                    <input type="color" class="form-control color" id="color" name="color" maxlength="20" value="{{ $objRole->color }}" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <footer class="card-footer text-right">
                <button type="submit" form="roleEditForm" class="btn btn-primary">SAVE</button>
            </footer>
        </div>
    </div>
@endsection