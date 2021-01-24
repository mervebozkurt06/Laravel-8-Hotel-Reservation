@extends('layouts.home')

@section('title',$search." Hotel List")



@section('content')


    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> Home
                <small>Page Not Found</small>
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
                <li class="breadcrumb-item active">Hotel List</li>
                <li class="breadcrumb-item active">{{$search}} Hotel List</li>
            </ol>
        </div>


        <div class="row">
            @foreach($datalist as $rs)
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}"><img class="card-img-top" style="height: 200px;weight:300px;" src="{{Storage::url($rs->image)}}" alt="" /></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">{{$rs->title}}</a>
                        </h4>
                        <p class="card-text">{{$rs->country}}</p>
                        <p class="card-text">{{$rs->star}} Star</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


        <div class="pagination_bar">
            <!-- Pagination -->
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <!-- /.container -->





@endsection
