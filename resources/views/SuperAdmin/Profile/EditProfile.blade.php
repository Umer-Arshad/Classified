@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])

    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{route("update-password", ['id' => $user])}}" method="POST">
                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
{{--                                <a type="button" href="{{route('update_profile', $user->id)}}" class="btn btn-block btn-primary btn-sm">Edit</a>--}}
                                <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm"><strong>Change Password</strong></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Password</label>
{{--                                        <input class="form-control" type="text" name="username" value="{{ old('password', auth()->user()->password) }}">--}}
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Confirm Password</label>
{{--                                        <input class="form-control" type="text" name="email" value="{{ old('password', auth()->user()->password) }}">--}}
                                        <input type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
