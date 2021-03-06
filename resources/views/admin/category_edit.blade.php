@extends('layouts.admin')

@section('title','Edit Category')

@section('content')

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title"> Edit Category</h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit Category</a></li>
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
                            <form action="{{route('admin_category_update',['id'=>$data->id])}}" method="post" id="basicform" >
                                @csrf
                                <div class="form-group">
                                    <label>Parent</label>

                                    <select name="parent_id" class="form-control" >

                                        <option value="0">Main Category</option>
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}"  @if($rs->id == $data->parent_id) selected="selected" @endif>
                                                {{ \App\Http\Controllers\admin\CategoryController::getParentsTree($rs,$rs->title) }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" value="{{$data->title}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" value="{{$data->keywords}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" value="{{$data->description}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" name="slug" value="{{$data->slug}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" id="input-select">
                                        <option>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>


                                {{--<div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">File Input</label>
                                </div>
                                --}}


                                <div class="row">
                                    <div class="col-sm-6 pl-0">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Update Category</button>
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
