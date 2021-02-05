@extends('layouts.home')

@section('title','My Reservation')



@section('content')


    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> Home
                <small>USER RESERVATION</small>
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
                <li class="breadcrumb-item active">User Reservation</li>
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
                            <th rowspan="1" colspan="1" style="width: 111px;">User</th>
                            <th rowspan="1" colspan="1" style="width: 49px;">Room</th>
                            <th rowspan="1" colspan="1" style="width: 27px;">Hotel</th>
                            <th rowspan="1" colspan="1" style="width: 27px;">Name</th>
                            <th rowspan="1" colspan="1" style="width: 50px;">Email</th>
                            <th rowspan="1" colspan="1" style="width: 52px;">Days</th>
                            <th rowspan="1" colspan="1" style="width: 52px;">Total</th>
                            <th rowspan="1" colspan="1" style="width: 52px;">Message</th>
                            <th rowspan="1" colspan="1" style="width: 52px;">Check In</th>
                            <th rowspan="1" colspan="1" style="width: 52px;">Check Out</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr role="row" class="odd">
                                <td >{{$rs->id}}</td>
                                <td >{{$rs->user_id}}</td>
                                <td >{{$rs->room_id}}</td>
                                <td >{{$rs->hotel_id}}</td>
                                <td >{{$rs->name}}</td>
                                <td >{{$rs->email}}</td>
                                <td >{{$rs->days}}</td>
                                <td>{{$rs->total}}</td>
                                <td>{{$rs->message}}</td>
                                <td>{{$rs->checkin}}</td>
                                <td>{{$rs->checkout}}</td>

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
