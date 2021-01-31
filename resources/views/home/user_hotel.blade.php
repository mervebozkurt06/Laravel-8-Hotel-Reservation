@extends('layouts.home')

@section('title','My Hotels')



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
                <li class="breadcrumb-item active">User Hotel</li>
            </ol>
        </div>

        <div class="row">

            <div class="col-lg-9">
                <div class="card-header">
                    <a href="{{route('user_hotel_add')}}" class="btn btn-primary">Add Hotel</a>
                    @include('home.message')
                    <table id="example3" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example3_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 70px;">Id</th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 111px;">Category</th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 49px;">Title</th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 27px;">Star</th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 27px;">Image</th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 27px;">Image Gallery</th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px;">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 52px;">Actions</th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 52px;">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr role="row" class="odd">
                                <td >{{$rs->id}}</td>

                                <td >
                                    {{ \App\Http\Controllers\admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}
                                </td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->star}}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{ Storage::url($rs->image) }}" height="30" alt="">
                                    @endif
                                </td>
                                <td ><a href="{{route('user_image_add',['hotel_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                        <img src="{{asset('assets/admin/images')}}/gallery.png" height="30"></a> </td>
                                <td>{{$rs->status}}</td>
                                <td>
                                    <a href="{{route('user_hotel_edit',['id'=>$rs->id])}}">
                                        <img src="{{asset('assets/admin/images')}}/edit.png" height="30"></a>
                                </td>
                                <td>
                                    <a href="{{route('user_hotel_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')">
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
