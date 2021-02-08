@extends('layouts.admin')

@section('title','Users List')

@section('content')

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Blank Pageheader </h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blank Pageheader</li>
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

                        <div class="card-body">
                            <div class="table">
                                <div id="example3_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example3" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example3_info">
                                                <thead>
                                                <tr role="row">
                                                    <th rowspan="1" colspan="1"  style="width: 70px;">Id</th>
                                                    <th rowspan="1" colspan="1"  style="width: 27px;">Image</th>
                                                    <th rowspan="1" colspan="1" style="width: 27px;">Name</th>
                                                    <th rowspan="1" colspan="1"  style="width: 27px;">Email</th>

                                                    <th rowspan="1" colspan="1"  style="width: 49px;">Address</th>
                                                    <th rowspan="1" colspan="1" style="width: 27px;">Roles</th>
                                                    <th rowspan="1" colspan="1" style="width: 52px;">Edit</th>
                                                    <th rowspan="1" colspan="1"  style="width: 52px;">Delete</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <tr role="row" class="odd">
                                                        <td >{{$rs->id}}</td>
                                                        <td>
                                                            @if($rs->profile_photo_path)
                                                                <img src="{{ Storage::url($rs->profile_photo_path) }}" height="50" style="border-radius: 10px"alt="">
                                                            @endif
                                                        </td>
                                                        <td>{{$rs->name}}</td>
                                                        <td>{{$rs->email}}</td>

                                                        <td>{{$rs->address}}</td>
                                                        <td>
                                                            @foreach($rs->roles as $row)
                                                                {{$row->name}},
                                                            @endforeach
                                                            <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                                                <i class="nav-icon fas fa-plus-circle"></i>
                                                            </a>
                                                        </td>


                                                        <td>
                                                            <a href="{{route('admin_user_edit',['id'=>$rs->id])}}">
                                                                <img src="{{asset('assets/admin/images')}}/edit.png" height="30"></a>
                                                        </td>
                                                        <td>
                                                            <a href="{{route('admin_user_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')">
                                                                <img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>

                                                <tfoot>

                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
