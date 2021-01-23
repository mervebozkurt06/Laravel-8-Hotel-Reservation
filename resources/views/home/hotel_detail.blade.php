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

                <!-- Date/Time -->
                <blockquote class="blockquote">
                <p class="mb-0">DETAILS</p>
                </blockquote>
                <hr>
                <p class="lead">{!! $data->detail !!}</p>


                <div class="blog-right-side">
                    <!-- Comments Form -->
                    <div class="card my-4">
                        <h5 class="card-header">Leave a Comment:</h5>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Single Comment -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="images/testi_01.png" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Commenter Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment with nested comments -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="images/testi_02.png" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Commenter Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                        <div class="media mt-4">
                            <img class="d-flex mr-3 rounded-circle" src="images/testi_01.png" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Commenter Name</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>

                        <div class="media mt-4">
                            <img class="d-flex mr-3 rounded-circle" src="images/testi_03.png" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Commenter Name</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>

                    </div>
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
                            <li>{{$data->country}}</li>
                            <li>{{$data->star}} Star</li>
                            <li>{{$data->description}}</li>
                            <li>Adipiscing Elit</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->





@endsection
