@extends('layouts.admin')

@section('title','Reservation Show')

@section('javascript')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection


@section('content')

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title"> Reservation Show</h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Reservation Show</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">



                    <div class="card">
                        <h5 class="card-header">Basic Form</h5>
                        <div class="card-body">

                            <div class="col-lg-9">
                                <div class="col-lg-9 mb-9">

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
                </div>
            </div>
        </div>
@endsection
