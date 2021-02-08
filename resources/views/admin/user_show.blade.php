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
                    <h5 class="card-header">USER ROLES</h5>
                    @include('home.message')

                    @csrf
                    <div class="card-body">
                        <table>

                            <tr>
                                <th rowspan="8">
                                <td>
                                    @if($data->profile_photo_path)
                                        <img src="{{ Storage::url($data->profile_photo_path) }}" height="100" style="border-radius: 10px"alt="">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Id</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$data->address}}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{$data->created_at}}</td>
                            </tr>


                            <tr>
                                <th>Roles</th>
                                <td>
                                    <table>
                                        @foreach($data->roles as $row)
                                            <tr>
                                                <td>{{$row->name}}</td>
                                                <td>
                                                    <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}"  onclick="return confirm('Are you sure?')">
                                                        <img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>                                                        </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <th>Add Role</th>
                                <td>
                                    <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <select name="roleid">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}">{{$rs->name}}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn-primary">Add Role</button>
                                    </form>
                                </td>
                            </tr>
                        </table>


                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


