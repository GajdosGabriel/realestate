@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Roles - New')

@section('content')
    <div class="container xs-pt-20 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <h3>New role</h3>

                <div class="col-12 col-lg-6 offset-lg-3">
                    <form action="{{ route('admin.roles.newPost') }}" id="newRoleForm" method="POST" class="cee">
                        @include('includes/errorList')

                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>

                            <input type="text" class="form-control" id="name" name="name" maxlength="20" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>

                            <input type="text" class="form-control" id="description" name="description" maxlength="100">
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="bg_color">Background color</label>

                                    <input type="color" class="form-control color" id="bg_color" name="bg_color" maxlength="20" value="#b5b4b6" required>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="color">Text color</label>

                                    <input type="color" class="form-control color" id="color" name="color" maxlength="20" value="#ffffff" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <footer class="card-footer text-right">
                <button type="submit" form="newRoleForm" class="btn btn-primary">SAVE</button>
            </footer>
        </div>
    </div>
@endsection