@extends('layouts.admin')

@section('title','Admin Reservation List')

@section('content')

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Reservation List </h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reservation List</li>
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

                        <div class="card-body">
                            <div class="table">
                                <div id="example3_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <div class="row">
                                        <div class="col-sm-12">
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
                                                    <th rowspan="1" colspan="1" style="width: 52px;">Note</th>
                                                    <th rowspan="1" colspan="1" style="width: 52px;">Status</th>
                                                    <th rowspan="1" colspan="1" style="width: 52px;">Edit</th>
                                                    <th rowspan="1" colspan="1" style="width: 52px;">Show</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <tr role="row" class="odd">
                                                        <td>{{$rs->id}}</td>
                                                        <td>{{$rs->user->name}}</td> {{--user=tablo adı rezervasyondan user tablosu ilişki--}}
                                                        <td>{{$rs->room->title}}</td>
                                                        <td>{{$rs->hotel->title}}</td>
                                                        <td>{{$rs->name}}</td>
                                                        <td>{{$rs->days}}</td>
                                                        <td>{{$rs->total}}</td>
                                                        <td>{{$rs->message}}</td>
                                                        <td>{{$rs->note}}</td>
                                                        <td>
                                                            {{$rs->status}}
                                                        </td>
                                                        <td>
                                                            <a href="{{route('admin_reservation_update',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                                                <img src="{{asset('assets/admin/images')}}/edit.png" height="30"></a>
                                                        </td>
                                                        <td>
                                                            <a href="{{route('admin_reservation_show',['id'=>$rs->id])}}">
                                                                <img src="{{asset('assets/admin/images')}}/click.png" height="30"></a>
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
                    </div>
                </div>
            </div>
@endsection
