@extends('layouts.admin')

@section('title','Add hotel')

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
                        <h2 class="pageheader-title"> Add hotel</h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Add hotel</a></li>
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
                            <form action="{{route('admin_hotel_store')}}" method="post" id="basicform" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Parent</label>

                                    <select name="category_id" class="form-control" >

                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">

                                                    {{ \App\Http\Controllers\admin\CategoryController::getParentsTree($rs,$rs->title) }}

                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="custom-file mb-3">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Image</label>
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Star</label>
                                    <input type="text" name="star" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Detail</label>
                                    <textarea id="summernote" name="detail"></textarea>
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
                                    <input type="text" name="phone" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" name="fax" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="country" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="location" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" name="slug" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" id="input-select">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>





                                <div class="row">
                                    <div class="col-sm-6 pl-0">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Add hotel</button>
                                            <button class="btn btn-space btn-secondary">Cancel</button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
@endsection
