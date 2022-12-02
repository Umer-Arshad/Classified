@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Coupon Codes'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <a type="button" href="{{route('add_coupon_code')}}" class="btn btn-block btn-primary btn-sm">Add</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 777pb-2">
                        <div class="table-responsive p-0">
                            <table id="table1" class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Coupon Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Type</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Condition</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($coupon_code as $coupon_code)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$coupon_code->coupon_name}}</h6>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $coupon_code->type == 1 ? 'Fixed' : 'Percentage' }}</p>

                                    </td>
                                    <td class="align-middle text-center text-sm">

                                               <a href="{{ route('update_coupon_code_status', ['id' => $coupon_code->id]) }}"  onclick="return confirm('Are you sure you want to update the status?')">
                                        <button class="badge btn   {{ $coupon_code->status == 1 ? 'btn-success' : 'btn-danger'}}" >
                                            {{ $coupon_code->status == 1 ? 'Enable' : 'Disable' }}
                                        </button>
                                    </a>

                                    </td>
                                    <td class="align-middle text-center">
                                        @if(($coupon_code->condition==1))
                                            <h6 class="mb-0 text-sm">{{'Single User'}}</h6>

                                        @elseif($coupon_code->condition==2)
                                            <h6 class="mb-0 text-sm">{{'Customer'}}</h6>

                                        @elseif($coupon_code->condition==3)
                                            <h6 class="mb-0 text-sm">{{'New User'}}</h6>

                                        @elseif($coupon_code->condition==4)
                                            <h6 class="mb-0 text-sm">{{'Visitor'}}</h6>

                                        @else
                                            <h6 class="mb-0 text-sm">{{'Advertiser'}}</h6>

                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-end">
                                        <a   href="{{route('edit_coupon_code',$coupon_code->id)}}">
                                            <i class="fa-solid fa-pen-to-square text-success mx-1"></i>
                                            {{--                                                <p class="text-sm font-weight-bold mb-0 ps-2">Edit</p>--}}
                                        </a>
                                        <a   onclick="return confirm('Are you sure?')"  href="{{route('delete_coupon_code',$coupon_code->id)}}">
                                            <i class="fa fa-trash text-danger mx-1" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth.footer')
    </div>
@endsection

