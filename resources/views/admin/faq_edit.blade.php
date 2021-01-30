@extends('layouts.admin')

@section('title','Edit hotel')

@section('javascript')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
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
                        <h2 class="pageheader-title"> Edit hotel</h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit hotel</a></li>
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
                            <form action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" id="basicform" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Position</label>
                                    <input type="number" name="position" data-parsley-trigger="change" value="{{$data->position}}"    autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" name="question" data-parsley-trigger="change" value="{{$data->question}}"   autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea name="answer" >{{$data->answer}}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'answer' );
                                    </script>
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
                                            <button type="submit" class="btn btn-space btn-primary">Update hotel</button>
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
