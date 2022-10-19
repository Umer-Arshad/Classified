@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Edit Coupon Code'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="card-body">
                        {{--                        <p class="text-uppercase text-sm">User Information</p>--}}
                        <div class="row">
                            <form method="POST"  enctype="multipart/form-data" action="{{ route('update_coupon_code', $coupon_code->id)}}" >
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Coupon Name</label>
                                            <input class="form-control" name="coupon_name" type="text" value="{{$coupon_code->coupon_name}}" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Type</label>

                                            <select name="type" class="form-control"  >
{{--                                                <option value="" selected disabled>Select Gender</option>--}}
                                                <option @if($coupon_code->type == 1) selected @endif value="1">Fixed</option>
                                                <option @if($coupon_code->type == 2) selected @endif value="2">Percentage</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Condition</label>

                                            <select name="condition" class="form-control"  >
                                                {{--                                                <option value="" selected disabled>Select Gender</option>--}}
                                                <option @if($coupon_code->condition == 1) selected @endif value="1">Single User</option>
                                                <option @if($coupon_code->condition == 2) selected @endif value="2">Customer</option>
                                                <option @if($coupon_code->condition == 3) selected @endif value="3">New User</option>
                                                <option @if($coupon_code->condition == 4) selected @endif value="4">Visitor</option>
                                                <option @if($coupon_code->condition == 5) selected @endif value="5">Advertiser</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Status</label>
                                            <input  type="checkbox" {{$coupon_code->status== 1 ? 'checked':''}}  name="status" >
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
            @include('layouts.footers.auth.footer')
        </div>
@endsection


