@extends('layouts.home')

@section('title','User Profile')



@section('content')


    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> Home
                <small>USER PROFILE</small>
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
                <li class="breadcrumb-item active">User Profile</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-9">
                <table id="example3" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example3_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"  style="width: 70px;">Id</th>
                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="width: 27px;">Hotel</th>
                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"  style="width: 27px;">Subject</th>
                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"  style="width: 111px;">Review</th>
                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="width: 49px;">Rate</th>
                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="width: 49px;">Status</th>
                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"  style="width: 27px;">Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="width: 52px;">Delete</th>
                    </tr>
                    </thead>

                    @include('home.message')
                    <tbody>
                    @foreach($datalist as $rs)
                        <tr role="row" class="odd">
                            <td >{{$rs->id}}</td>
                            <td>
                                <a href="{{route('hotel',['id'=>$rs->hotel->id,'slug'=>$rs->hotel->slug])}}"> {{$rs->hotel->title}}</a>
                            </td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->review}}</td>
                            <td>{{$rs->rate}}</td>
                            <td>{{$rs->status}}</td>
                            <td>{{$rs->created_at}}</td>
                            <td>
                                <a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')">
                                    <img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>
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
        <!-- /.jumbotron -->

    </div>
    <!-- /.container -->





@endsection
