@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Add Coupon Code'])
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
                            <form method="POST"  enctype="multipart/form-data" action="{{ route('store_coupon_code')}}" >
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Coupon Name</label>
                                            <input class="form-control" name="coupon_name" type="text" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Type</label>
                                            <select    class="form-control" name="type" style="
                  display: block; width: 100%; padding: .375rem 2.25rem .375rem .75rem; font-size: 1rem;
       font-weight: 400; line-height: 1.5rem; color: #212529; background-color: #fff; background-repeat: no-repeat;
background-position: right .75rem center; background-size: 16px 12px; border: 1px solid #ced4da ; border-radius: .25rem;
-webkit-appearance: none; -moz-appearance: none ; appearance: none">
                                                <option value="1">Fixed</option>
                                                <option value="2">Percentage</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Condition</label>
                                            <select    class="form-control" name="condition" style="
                  display: block; width: 100%; padding: .375rem 2.25rem .375rem .75rem; font-size: 1rem;
       font-weight: 400; line-height: 1.5rem; color: #212529; background-color: #fff; background-repeat: no-repeat;
background-position: right .75rem center; background-size: 16px 12px; border: 1px solid #ced4da ; border-radius: .25rem;
-webkit-appearance: none; -moz-appearance: none ; appearance: none">
                                                <option value="1">Single User</option>
                                                <option value="2">Customer</option>
                                                <option value="3">New User</option>
                                                <option value="4">Visitor</option>
                                                <option value="5">Advertiser</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Status</label>
                                            <input type="checkbox"  name="status" >
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
            @include('layouts.footers.auth.footer')
        </div>
@endsection


