@extends('layouts.home')

@section('title','My Reservation')



@section('content')


    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> Home
                <small>USER RESERVATIONS</small>
            </h1>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">User Reservations</li>
            </ol>
        </div>

        <div class="row">

            <div class="col-lg-9">
                <div class="card-header">
                    @include('home.message')
                    <table id="example3" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example3_info">
                        <thead>
                        <tr role="row">
                            <th rowspan="1" colspan="1" style="width: 70px;">Id</th>
                            <th rowspan="1" colspan="1" style="width: 111px;">Hotel Name</th>
                            <th rowspan="1" colspan="1" style="width: 49px;">Room Type</th>
                            <th rowspan="1" colspan="1" style="width: 27px;">User Name</th>
                            <th rowspan="1" colspan="1" style="width: 27px;">Name Surname</th>
                            <th rowspan="1" colspan="1" style="width: 27px;">Phone</th>
                            <th rowspan="1" colspan="1" style="width: 27px;">Check In</th>
                            <th rowspan="1" colspan="1" style="width: 27px;">Check Out</th>
                            <th rowspan="1" colspan="1" style="width: 27px;">Days</th>
                            <th rowspan="1" colspan="1" style="width: 27px;">Room Price</th>
                            <th rowspan="1" colspan="1" style="width: 27px;">Total</th>
                            <th rowspan="1" colspan="1" style="width: 50px;">Status</th>
                            <th rowspan="1" colspan="1" style="width: 52px;">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($datalist as $rs)
                            <tr role="row" class="odd">
                                <td >{{$rs->id}}</td>
                                <td>{{$rs->hotel->title}}</td>

                                <td>
                                    <a href="{{route('hotel',['id'=>$rs->hotel->id,'slug'=>$rs->hotel->slug])}}">{{$rs->room->title}}
                                    </a>
                                </td>

                                <td>{{$rs->user->name}}</td>
                                <td>{{$rs->name}} {{$rs->surname}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>{{$rs->checkin}}</td>
                                <td>{{$rs->checkout}}</td>
                                <td>{{$rs->days}}</td>
                                <td>{{$rs->room->price}}</td>
                                <td>{{$rs->room->price*$rs->days*($rs->kid+$rs->adult)}}</td>
                                <td>{{$rs->status}}</td>

                                <td>
                                    <a href="{{route('user_reservation_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')">
                                        <img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3 blog-right-side">
                @include('home.usermenu')
            </div>
        </div>
    </div>
@endsection
