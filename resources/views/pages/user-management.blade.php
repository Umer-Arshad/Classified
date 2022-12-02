@extends('layouts.app')
@section('content')

    @if($title=='Advertiser')
    <div>
        @include('layouts.navbars.auth.topnav', ['title' => $title]).
    </div>
    @else
        @include('layouts.navbars.auth.topnav', ['title' =>$title]).

    @endif

<!--Main Div start!-->
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
           <div class="card-header pb-0">
           </div>

            <!--Table Body Div start!-->
            <div id="body" class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive text-nowrap">
                    <table id="table1" class="table table-striped">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role
                            </th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Status</th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $user)
                            <tr>
                                <td>
                                    <div class="d-flex px-3 py-1">
                                        <div>

                                            <img src="{{asset('assets/userimage/'.$user->profile_image)}}" class="avatar me-3" alt="image">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$user->firstname}}{{$user->lastname}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <p class="text-sm font-weight-bold mb-0">{{$user->role->name}}</p>
                                </td>
                                <td class="align-middle  text-center text-sm">
                                    <a href="{{ route('update_user_status', ['id' => $user->id]) }}"  onclick="return confirm('Are you sure you want to update the status?')">
                                        <button class="badge btn   {{ $user->status == 1 ? 'btn-success' : 'btn-danger'}}" >
                                            {{ $user->status == 1 ? 'Active' : 'Deactive' }}
                                        </button>
                                    </a>
                                </td>
                                <td class="align-middle text-center text-end">
                                    <a href="javascript:void(0)"
                                        id="show-user"
                                        data-url="{{route('users.show',$user->id)}}"
                                    <i class="fa fa-eye text-info mx-1"  aria-hidden="true"></i>
                                    </a>
                                    <a   href="{{route('edit_user',$user->id)}}">
                                        <i class="fa-solid fa-pen-to-square text-success mx-1"></i>
                                        {{--                                                <p class="text-sm font-weight-bold mb-0 ps-2">Edit</p>--}}
                                    </a>
                                    <a   onclick="return confirm('Are you sure?')"  href="{{route('delete_user',$user->id)}}">
                                        <i class="fa fa-trash text-danger mx-1" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                    </table>



                </div>

            </div>

            <!--Table Body Div end!-->

               <!---Model of Show User!-->

                <div class="modal fade" id="userShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Show User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                  <p><strong>First Name:</strong> <span id="first-name"></span></p>
                                    <p><strong>Last Name:</strong> <span id="last-name"></span></p>
                                    <p><strong>Email:</strong> <span id="user-email"></span></p>
                                    <p><strong>Gender:</strong> <span id="user-gender"></span></p>
                                    <p><strong>Phone Number:</strong> <span id="user-phonenumber"></span></p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


        </div>

    </div>

</div>

<!--Main Div end!-->


<!--Show User Ajax!-->


<script type="text/javascript">

    $(document).ready(function () {

        /* When click show user */
        $('#body').on('click', '#show-user', function () {
            var userURL = $(this).data('url');
            $.get(userURL, function (data) {
                $('#userShowModal').modal('show');
                $('#first-name').text(data.firstname);
                $('#last-name').text(data.lastname);
                $('#user-email').text(data.email);
                $('#user-gender').text(data.gender);
                $('#user-phonenumber').text(data.phone_no);
            });
        });

    });

</script>

</html>
@endsection
