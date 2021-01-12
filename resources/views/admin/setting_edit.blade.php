@extends('layouts.admin')

@section('title','Edit setting')

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
                        <h2 class="pageheader-title"> Edit setting</h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit setting</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->

            <form action="{{route('admin_setting_update')}}" method="post"  enctype="multipart/form-data">
                @csrf

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">

                    <div class="simple-card">
                        <ul class="nav nav-tabs" id="myTab5" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active border-left-0" id="general-tab-simple" data-toggle="tab" href="#general-simple" role="tab" aria-controls="general" aria-selected="true">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="smtp-tab-simple" data-toggle="tab" href="#smtp-simple" role="tab" aria-controls="smtp" aria-selected="false">Smtp Email</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="social-tab-simple" data-toggle="tab" href="#social-simple" role="tab" aria-controls="social" aria-selected="false">Social Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="about-tab-simple" data-toggle="tab" href="#about-simple" role="tab" aria-controls="about" aria-selected="false">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab-simple" data-toggle="tab" href="#contact-simple" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="reference-tab-simple" data-toggle="tab" href="#reference-simple" role="tab" aria-controls="reference" aria-selected="false">References</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent5">
                            <div class="tab-pane fade show active" id="general-simple" role="tabpanel" aria-labelledby="general-tab-simple">
                                <input type="hidden" name="id" id="id" value="{{$data->id}}"  class="form-control">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" value="{{$data->title}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" value="{{$data->keywords}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" value="{{$data->description}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" name="company" value="{{$data->company}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address"  value="{{$data->address}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{$data->phone}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" name="fax" value="{{$data->fax}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{$data->email}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" id="input-select">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="smtp-simple" role="tabpanel" aria-labelledby="smtp-tab-simple">
                                <div class="form-group">
                                    <label>Smtpserver</label>
                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtpemail</label>
                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtppassword</label>
                                    <input type="password" name="smtppassword" value="{{$data->smtppassword}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtpport</label>
                                    <input type="number" name="smtpport" value="{{$data->smtpport}}"  class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="social-simple" role="tabpanel" aria-labelledby="social-tab-simple">
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" value="{{$data->facebook}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" name="instagram" value="{{$data->instagram}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" name="twitter" value="{{$data->twitter}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text" name="youtube" value="{{$data->youtube}}"  class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="about-simple" role="tabpanel" aria-labelledby="about-tab-simple">
                                <div class="form-group">
                                    <label>About Us</label>
                                    <input id="aboutus"  name="aboutus" value="{{$data->aboutus}}"  class="form-control">
                                    <script>
                                        $('#aboutus').summernote({
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
                            </div>
                            <div class="tab-pane fade" id="contact-simple" role="tabpanel" aria-labelledby="contact-tab-simple">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input id="contact" type="text" name="contact" value="{{ $data->contact }}"  class="form-control">
                                    <script>
                                        $('#contact').summernote({
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
                            </div>
                            <div class="tab-pane fade" id="reference-simple" role="tabpanel" aria-labelledby="reference-tab-simple">
                                <div class="form-group">
                                    <label>References</label>
                                    <input id="references" type="text" name="references" value="{{$data->references}}"  class="form-control">
                                    <script>
                                        $('#references').summernote({
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
                            </div>

                            <div class="row">
                                <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-space btn-primary">Update Settings</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            {{--<div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="card">
                        <h5 class="card-header">Basic Form</h5>
                        <div class="card-body">
                            <form action="{{route('admin_setting_update')}}" method="post"  enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" id="id" value="{{$data->id}}"  class="form-control">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" value="{{$data->title}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" value="{{$data->keywords}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" value="{{$data->description}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" name="company" value="{{$data->company}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address"  value="{{$data->address}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{$data->phone}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" name="fax" value="{{$data->fax}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{$data->email}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtpserver</label>
                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtpemail</label>
                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtppassword</label>
                                    <input type="password" name="smtppassword" value="{{$data->smtppassword}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtpport</label>
                                    <input type="number" name="smtpport" value="{{$data->smtpport}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" value="{{$data->facebook}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" name="instagram" value="{{$data->instagram}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" name="twitter" value="{{$data->twitter}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text" name="youtube" value="{{$data->youtube}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>About Us</label>
                                    <input id="aboutus"  name="aboutus" value="{{$data->aboutus}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input id="contact" type="text" name="contact" value="{{$data->contact}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>References</label>
                                    <input id="references" type="text" name="references" value="{{$data->references}}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" id="input-select">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
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
                                        $('#aboutus').summernote({
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
                                        $('#contact').summernote({
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
                                        $('#references').summernote({
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
                                <div class="row">
                                    <div class="col-sm-6 pl-0">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Update setting</button>

                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>






                </div>
            </div>
            --}}


        </div>
    </div>
@endsection
