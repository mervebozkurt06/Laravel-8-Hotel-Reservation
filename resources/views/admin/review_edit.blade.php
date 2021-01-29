<link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Fontawesome CSS -->
<link href="{{asset('assets')}}/css/all.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
<link rel="stylesheet" href="{{asset('assets')}}/font-awesome-4.7.0/css/font-awesome.min.css">    <!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">                          <!-- Bootstrap style -->
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/slick/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/datepicker.css"/>
<link rel="stylesheet" href="{{asset('assets')}}/css/tooplate-style.css">

@section('javascript')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <h5 class="card-header">Review Detail</h5>
                    @include('home.message')

                    <form action="{{route('admin_review_update',['id'=>$data->id])}}" method="post" id="basicform" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <table>
                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Hotel</th>
                                    <td>{{$data->hotel->title}}</td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <td>{{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <th>Review</th>
                                    <td>{{$data->review}}</td>
                                </tr>
                                <tr>
                                    <th>Rate</th>
                                    <td>{{$data->rate}}</td>
                                </tr>
                                <tr>
                                    <th>IP</th>
                                    <td>{{$data->IP}}</td>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Updated Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>

                                        <select name="status" class="form-control" id="input-select">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-sm-6 pl-0">
                                            <p class="text-right">
                                                <button type="submit" class="btn btn-space btn-primary">Update Review</button>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


