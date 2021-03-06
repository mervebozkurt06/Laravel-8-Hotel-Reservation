@extends('layouts.home')

@section('title','Edit Hotel')

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
                <small>Edit Hotel</small>
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
                <li class="breadcrumb-item active">Edit hotel</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-9">
                <form action="{{route('user_hotel_update',['id'=>$data->id])}}" method="post" id="basicform" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Parent</label>

                        <select name="category_id" class="form-control" >

                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}"  @if($rs->id == $data->parent_id) selected="selected" @endif>
                                    {{ \App\Http\Controllers\admin\CategoryController::getParentsTree($rs,$rs->title) }}
                                </option>

                            @endforeach
                        </select>

                    </div>


                    <div class="custom-file mb-3">
                        <input type="file" name="image"  class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile"><i>Choose Image...</i></label>
                        <div class="row">

                            @if($data->image)
                                <img src="{{Storage::url($data->image)}}" height="60" alt="">
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{$data->title}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keywords</label>
                        <input type="text" name="keywords" value="{{$data->keywords}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" value="{{$data->description}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Star</label>
                        <input type="text" name="star" value="{{$data->star}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address"  value="{{$data->address}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <textarea id="summernote" name="detail">{{$data->detail}}</textarea>
                        <script>
                            $('#summernote').summernote({
                                placeholder: 'Hello stand alone ui',
                                tabsize: 2,
                                height: 120,
                                toolbar: [
                                    ['style', ['style']],
                                    ['font', ['bold', 'underline', 'clear']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['table', ['table']],
                                    ['insert', ['link', 'picture', 'video']],
                                    ['view', ['fullscreen', 'codeview', 'help']]
                                ]
                            });
                        </script>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" value="{{$data->phone}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Fax</label>
                        <input type="text" name="fax" value="{{$data->fax}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="{{$data->email}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" value="{{$data->city}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" name="country" value="{{$data->country}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" name="location" value="{{$data->location}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" name="slug" value="{{$data->slug}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" id="input-select">
                            <option selected="selected">{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Update hotel</button>
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
