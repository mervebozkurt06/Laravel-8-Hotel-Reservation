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
                    <h5 class="card-header">Message Detail</h5>
                    @include('home.message')
                    <div class="card-body">
                        <form action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" id="basicform" enctype="multipart/form-data">
                            @csrf

                            <table id="example3" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example3_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 70px;">Id
                                    <td >{{$data->id}}</td>
                                    </th>
                                </tr>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 70px;">Name
                                    <td >{{$data->name}}</td>
                                    </th>
                                </tr>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 70px;">Email
                                    <td >{{$data->email}}</td>
                                    </th>
                                </tr>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 70px;">Phone
                                    <td >{{$data->phone}}</td>
                                    </th>
                                </tr>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 70px;">Subject
                                    <td >{{$data->subject}}</td>
                                    </th>
                                </tr>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 70px;">Message
                                    <td >{{$data->message}}</td>
                                    </th>
                                </tr>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 70px;">Admin Note
                                    <td >
                                        <textarea id="note" name="note">{{$data->note}}</textarea>
                                    </td>
                                    </th>
                                </tr>
                                <div class="row">
                                    <div class="col-sm-6 pl-0">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Update Message</button>
                                        </p>
                                    </div>
                                </div>


                                </thead>
                            </table>


                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

