@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Show User'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            {{--            <div class="alert alert-light" role="alert">--}}
            {{--                This feature is available in <strong>Argon Dashboard 2 Pro Laravel</strong>. Check it--}}
            {{--                <strong>--}}
            {{--                    <a href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">--}}
            {{--                        here--}}
            {{--                    </a>--}}
            {{--                </strong>--}}
            {{--            </div>--}}
            <div class="card mb-4">
{{--                @foreach($user as $user)--}}
{{--                <div class="card-header pb-0">--}}
{{--                    <h6>{{$user->firstn#table1ame}}{{$user->lastname}}</h6>--}}
{{--                </div>--}}
{{--                @endforeach--}}
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Email</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Gender</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $user)

                                <tr>

                                    <td>
                                        <div class="d-flex px-3 py-1">
{{--                                            <div>--}}
{{--                                               <img src="./img/team-1.jpg" class="avatar me-3" alt="image">--}}
{{--                                            </div>--}}
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$user->firstname}}{{$user->lastname}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{$user->role->name}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">{{$user->email}}</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <p class="text-sm font-weight-bold mb-0">{{$user->gender}}</p>
                                        </div>
                                    </td>
                                </tr>
                                {{--                                <tr>--}}
                                {{--                                    <td>--}}
                                {{--                                        <div class="d-flex px-3 py-1">--}}
                                {{--                                            <div>--}}
                                {{--                                                <img src="./img/team-2.jpg" class="avatar me-3" alt="image">--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="d-flex flex-column justify-content-center">--}}
                                {{--                                                <h6 class="mb-0 text-sm">Creator</h6>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </td>--}}
                                {{--                                    <td>--}}
                                {{--                                        <p class="text-sm font-weight-bold mb-0">Creator</p>--}}
                                {{--                                    </td>--}}
                                {{--                                    <td class="align-middle text-center text-sm">--}}
                                {{--                                        <p class="text-sm font-weight-bold mb-0">22/03/2022</p>--}}
                                {{--                                    </td>--}}
                                {{--                                    <td class="align-middle text-end">--}}
                                {{--                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">--}}
                                {{--                                            <p class="text-sm font-weight-bold mb-0">Edit</p>--}}
                                {{--                                            <p class="text-sm font-weight-bold mb-0 ps-2">Delete</p>--}}
                                {{--                                        </div>--}}
                                {{--                                    </td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>--}}
                                {{--                                        <div class="d-flex px-3 py-1">--}}
                                {{--                                            <div>--}}
                                {{--                                                <img src="./img/team-3.jpg" class="avatar me-3" alt="image">--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="d-flex flex-column justify-content-center">--}}
                                {{--                                                <h6 class="mb-0 text-sm">Member</h6>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </td>--}}
                                {{--                                    <td>--}}
                                {{--                                        <p class="text-sm font-weight-bold mb-0">Member</p>--}}
                                {{--                                    </td>--}}
                                {{--                                    <td class="align-middle text-center text-sm">--}}
                                {{--                                        <p class="text-sm font-weight-bold mb-0">22/03/2022</p>--}}
                                {{--                                    </td>--}}
                                {{--                                    <td class="align-middle text-end">--}}
                                {{--                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">--}}
                                {{--                                            <p class="text-sm font-weight-bold mb-0 cursor-pointer">Edit</p>--}}
                                {{--                                            <p class="text-sm font-weight-bold mb-0 ps-2 cursor-pointer">Delete</p>--}}
                                {{--                                        </div>--}}
                                {{--                                    </td>--}}
                                {{--                                </tr>--}}
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
