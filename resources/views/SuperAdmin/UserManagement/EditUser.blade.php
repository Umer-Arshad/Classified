@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')


    @if($user->role->name=='Advertiser')
        @include('layouts.navbars.auth.topnav', ['title' => 'Edit Advertiser'])
    @else
        @include('layouts.navbars.auth.topnav', ['title' => 'Edit Customer'])
    @endif


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">

{{--                            <button class="btn btn-primary btn-sm ms-auto">Settings</button>--}}
                        </div>
                    </div>
                    <div class="card-body">
{{--                        <p class="text-uppercase text-sm">User Information</p>--}}
                        <div class="row">
                            <form method="POST"  enctype="multipart/form-data" action="{{ route('update_user', $user->id)}}" >
                                @csrf
                          <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">First name</label>
                                    <input class="form-control" name="firstname" type="text" value="{{$user->firstname}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Last name</label>
                                    <input class="form-control" name="lastname" type="text" value="{{$user->lastname}}">
                                </div>
                            </div>
                          </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Email Address</label>
                                            <input class="form-control" name="email" type="email" value="{{$user->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Password</label>
                                            <input class="form-control" type="password" value="{{$user->password}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Phone Number</label>
                                            <input class="form-control" name="phone_no" type="text" value="{{$user->phone_no}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Status</label>
                                            <input  type="checkbox" {{$user->status== 1 ? 'checked':''}}  name="status" >
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Gender</label>
                                            <select  value="{{$user->gender}}"  class="form-control" name="gender" style="
                  display: block; width: 100%; padding: .375rem 2.25rem .375rem .75rem; font-size: 1rem;
       font-weight: 400; line-height: 1.5rem; color: #212529; background-color: #fff; background-repeat: no-repeat;
background-position: right .75rem center; background-size: 16px 12px; border: 1px solid #ced4da ; border-radius: .25rem;
-webkit-appearance: none; -moz-appearance: none ; appearance: none">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">User Role</label>
                                            <select    class="form-control" name="user_role_id" value="{{$user->user_role_id}}" style="
                  display: block; width: 100%; padding: .375rem 2.25rem .375rem .75rem; font-size: 1rem;
       font-weight: 400; line-height: 1.5rem; color: #212529; background-color: #fff; background-repeat: no-repeat;
background-position: right .75rem center; background-size: 16px 12px; border: 1px solid #ced4da ; border-radius: .25rem;
-webkit-appearance: none; -moz-appearance: none ; appearance: none">

                                                <option value=""></option>
                                                @foreach($user_role as $userrole)
                                                    @if($user->user_role_id == $userrole->id)
                                                        <option value="{{$userrole->id}}" selected>{{$userrole->name}}</option>

                                                    @else
                                                        <option value="{{$userrole->id}}">{{$userrole->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Image</label>
                                            <input class="form-control" type="file" name="profile_image">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <img src="{{asset('assets/userimage/'.$user->profile_image)}}" style="max-height: 60px">
                                            {{--                                            <input type="file" value="{{$user->profile_img}}"    class="form-control"  >--}}
                                        </div>
                                    </div>
                                </div>

                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Contact Information</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Address 1</label>
                                    <input class="form-control" type="text" name="address1"
                                           value="{{$user->address1}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Address 2</label>
                                    <input class="form-control" type="text" name="address2"
                                           value="{{$user->address2}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">City</label>
                                    <input class="form-control" name="city" type="text" value="{{$user->city}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Country</label>
                                    <input class="form-control" name="country" type="text" value="{{$user->country}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">State</label>
                                    <input class="form-control" name="state" type="text" value="{{$user->state}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Zip</label>
                                    <input class="form-control" name="zip" type="text" value="{{$user->zip}}">
                                </div>
                            </div>
                        </div>



                        <div class="card-footer">
                            @if($user->role->name=='Advertiser')
                              <button type="submit" class="btn btn-primary">Edit Advertiser</button>
                            @else
                                <button type="submit" class="btn btn-primary">Edit Customer</button>
                            @endif
                        </div>
                            </form>

                        </div>
                </div>

            </div>

        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

