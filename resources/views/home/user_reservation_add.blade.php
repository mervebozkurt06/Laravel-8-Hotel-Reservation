@extends('layouts.home')

@section('title','Add Reservation')

@section('headerjs')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection

@section('content')


    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> Home
                <small>Add Reservation</small>
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
                <li class="breadcrumb-item active">Add Reservation</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-9">
                <form action="{{route('user_reservation_store',['hotel_id'=>$hotel_id,'room_id'=>$room_id])}}" method="post" id="basicform" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>User Id</label>
                        <input type="text" value="{{Auth::user()->name}}" name="user_id" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Room Id</label>
                        <input type="text" name="room_id" value="{{$room_id->title}}"  data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Hotel</label>
                        <input type="text" name="hotel_id" value="{{$hotel_id->title}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Name-Surname</label>
                        <input type="text" name="name" value="{{Auth::user()->name}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="{{Auth::user()->email}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" value="{{Auth::user()->phone}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <input type="text" name="message" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Days</label>
                        <input type="text" name="days" value="{{$days}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Check In</label>
                        <input type="text" name="checkin" value="{{$checkin}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Check Out</label>
                        <input type="text" name="checkout" value="{{$checkout}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Adult</label>
                        <input type="text" name="adult" value="{{$adult}}"  data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kid</label>
                        <input type="text" name="kid"  value="{{$kid}}"  data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Total</label>
                        <input type="text" name="total"  value="{{$total}}"  data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Pay Reservation</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 blog-right-side">
                @include('home.usermenu')
            </div>

        </div>
        <!-- /.jumbotron -->

    </div>
    <!-- /.container -->





@endsection
