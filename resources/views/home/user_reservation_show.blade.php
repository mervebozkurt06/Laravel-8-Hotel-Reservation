@extends('layouts.home')

@section('title','Reservation Detail')

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
                <small>Reservation Detail</small>
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
                <li class="breadcrumb-item active">Reservation Detail</li>
            </ol>
        </div>

        <div class="pricing-box">
            <!-- Content Row -->
            <div class="row">

                <div class="col-lg-9">
                    <div class="col-lg-9 mb-9">
                        <div class="card card-outline-primary h-100">
                            <div class="card-body">
                                <div class="font-italic">Enjoy your stay!</div>
                                <ul class="list-group list-group-flush">
                                    @foreach($datalist as $rs)
                                        <li class="list-group-item">USER         :{{$rs->user->name}}</li>
                                        <li class="list-group-item">ROOM         :{{$rs->room->title}}</li>
                                        <li class="list-group-item">HOTEL        :{{$rs->hotel->title}}</li>
                                        <li class="list-group-item">NAME/SURNAME :{{$rs->name}} {{$rs->surname}}</li>
                                        <li class="list-group-item">EMAIL        :{{$rs->email}}</li>
                                        <li class="list-group-item">PHONE        :{{$rs->phone}}</li>
                                        <li class="list-group-item">MESSAGE      :{{$rs->message}}</li>
                                        <li class="list-group-item">ADMIN NOTE   :{{$rs->note}}</li>
                                        <li class="list-group-item">CHECK IN/CHECK OUT: {{$rs->checkin}}/{{$rs->checkout}}</li>
                                        <li class="list-group-item">DAYS         :{{$rs->days}} </li>
                                        <li class="list-group-item">ROOM PRICE   :{{$rs->room->price}} </li>
                                        <li class="list-group-item">ADULT        :{{$rs->adult}} Kid :{{$rs->kid}} </li>
                                        <li class="list-group-item">TOTAL        :{{$rs->total}} </li>
                                        <li class="list-group-item">IP           :{{$rs->IP}} </li>
                                        <li class="list-group-item">STATUS       :{{$rs->status}} </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 blog-right-side">
                    @include('home.usermenu')
                </div>

            </div>
        </div>
        <!-- /.jumbotron -->

    </div>
    <!-- /.container -->





@endsection
