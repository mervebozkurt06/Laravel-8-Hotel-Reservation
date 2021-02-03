@extends('layouts.home')

@section('title',$data->title)
@section('description'){{ $data->description }}@endsection

@section('keywords',$data->keywords)


@section('content')


    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> Home
                <small>Hotel Detail</small>
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
                <li class="breadcrumb-item active">{{\App\Http\Controllers\admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</li>
                <li class="breadcrumb-item active">{{$data->title}}</li>
            </ol>
        </div>
        <div class="row">
            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}"  style="width: 750px;height: 400px" alt="" />
                <div class="related-projects">
                    <!-- Related Projects Row -->
                    <h3>{{$data->title}}s Images</h3>
                    <div class="row">
                        @foreach($datalist as $rs)
                            <div class="col-md-3 col-sm-6 mb-4">
                                <a href="#">
                                    <img class="img-fluid" src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="height: 150px" alt="" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <!-- /.row -->
                </div>



            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4 blog-right-side">
                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">{{$data->title}}</h5>
                    <div class="card-body">
                        <p>{{$data->address}}</p>
                        <ul>
                            <li>{{$data->description}}</li>
                            <li>{{$data->star}} Star</li>
                            <li>{{$data->city}}/{{$data->country}}</li>
                            <li>Phone:{{$data->phone}}</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="faq-main">
            <div class="" id="accordion" role="tablist" aria-multiselectable="true">

                <div class="card accordion-single">
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion" href="#3" aria-expanded="true" aria-controls="collapseOne">DETAILS</a>
                        </h5>
                    </div>

                    <div id="3" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                            {!! $data->detail !!}
                        </div>
                    </div>
                </div>

                <div class="card accordion-single">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#1" aria-expanded="false" aria-controls="collapseTwo">ROOMS</a>
                        </h5>
                    </div>
                    <div id="1" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body">
                            <div class="blog-entries">
                                <!-- Related Projects Row -->
                                @foreach($rooms as $rs)
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <a href="#">
                                                        <img class="img-fluid rounded" style="height: 150px" src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h2 class="card-title">{{$rs->title}}</h2>
                                                    <p class="card-text">{{$rs->description}}</p>
                                                    <a href="#" class="btn btn-primary">Reserve Room &rarr;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted">
                                            <a href="#">{{$rs->price}}$</a>
                                        </div>
                                    </div>
                            @endforeach
                            <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card accordion-single">
                    <div class="card-header" role="tab" id="headingThree">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#2" aria-expanded="false" aria-controls="collapseThree">COMMENTS</a>
                        </h5>
                    </div>
                    <div id="2" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-body">
                            <div class="row">
                                <!-- Post Content Column -->
                                <div class="col-lg-5">
                                    <div class="blog-right-side">
                                        <!-- Comments Form -->
                                        <div class="card my-4">
                                            <h5 class="card-header">Leave a Comment:</h5>
                                            <div class="card-body">

                                                @livewire('review',['id'=>$data->id])

                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                <div class="col-lg-7">
                                    @php
                                        $avgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);
                                        $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                                    @endphp

                                    <h5 class="mt-0"><strong>{{$countreview}} Review(s)</strong></h5>

                                    @foreach($reviews as $rs)
                                        <hr>

                                        <div class="media mb-4">
                                            <img class="d-flex mr-3 rounded-circle" src="{{$rs->user->image}}" alt="">
                                            <div class="media-body">

                                                <h5 class="mt-0">{{$rs->user->name}}</h5>
                                                <p>{{$rs->subject}}</p>
                                                <p>{{$rs->review}}</p>
                                                <p><i class="fas fa-star">{{$rs->rate}}</i> | {{$rs->created_at}}</p>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->





@endsection
