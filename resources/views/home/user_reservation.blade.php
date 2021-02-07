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

                    @include('home.message')
                    <table id="example3" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example3_info">
                        <thead>
                        <tr role="row">
                            <th rowspan="1" colspan="1" style="width: 70px;">Id</th>
                            <th rowspan="1" colspan="1" style="width: 111px;">User</th>
                            <th rowspan="1" colspan="1" style="width: 49px;">Room</th>
                            <th rowspan="1" colspan="1" style="width: 27px;">Hotel</th>
                            <th rowspan="1" colspan="1" style="width: 27px;">Name</th>
                            <th rowspan="1" colspan="1" style="width: 52px;">Days</th>
                            <th rowspan="1" colspan="1" style="width: 52px;">Total</th>
                            <th rowspan="1" colspan="1" style="width: 52px;">Message</th>
                            <th rowspan="1" colspan="1" style="width: 52px;">Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr role="row" class="odd">
                                <td >{{$rs->id}}</td>
                                <td >{{$rs->user->name}}</td> {{--user=tablo adı rezervasyondan user tablosu ilişki--}}
                                <td >{{$rs->room->title}}</td>
                                <td >{{$rs->hotel->title}}</td>
                                <td >{{$rs->name}}</td>
                                <td >{{$rs->days}}</td>
                                <td>{{$rs->total}}</td>
                                <td>{{$rs->message}}</td>
                                <td>
                                    <a href="{{route('user_reservation_show',['id'=>$rs->id])}}">
                                        <img src="{{asset('assets/admin/images')}}/click.png" height="30"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>



            </div>
            <div class="col-md-3 blog-right-side">
                @include('home.usermenu')
            </div>
        </div>
    </div>
@endsection
