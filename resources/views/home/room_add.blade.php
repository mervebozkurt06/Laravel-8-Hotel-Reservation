<html>
<head>
    <title>Room Gallery</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{ asset('assets')}}/admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
</head>
<body>



<!-- ============================================================== -->
<!-- end pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">



        <div class="card">
            <h5 class="card-header">Add Room for -> <b>{{$data->title}}</b></h5>
            <div class="card-body">
                <form action="{{route('user_room_store',['hotel_id'=>$data->id])}}" method="post" id="basicform" enctype="multipart/form-data">
                    @csrf
                    <div class="custom-file mb-3">
                        <input type="file" name="image" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Image</label>
                    </div>

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Number</label>
                        <input type="number" name="number" data-parsley-trigger="change"   autocomplete="off" class="form-control">
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
                                <button type="submit" class="btn btn-space btn-primary">Add Room</button>
                            </p>
                        </div>
                    </div>
                </form>


                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <table id="example3" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example3_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 70px;">Id</th>
                                    <th rowspan="1" colspan="1"style="width: 27px;">Title</th>
                                    <th rowspan="1" colspan="1"style="width: 27px;">Image </th>
                                    <th rowspan="1" colspan="1"style="width: 27px;">Description </th>
                                    <th rowspan="1" colspan="1"style="width: 27px;">Price </th>
                                    <th rowspan="1" colspan="1"style="width: 27px;">Number </th>
                                    <th rowspan="1" colspan="1"style="width: 27px;">Status </th>
                                    <th rowspan="1" colspan="1"style="width: 27px;">Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($rooms as $rs)
                                    <tr role="row" class="odd">
                                        <td >{{$rs->id}}</td>
                                        <td >{{$rs->title}}</td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{ Storage::url($rs->image) }}" height="30" alt="">
                                            @endif
                                        </td>
                                        <td >{{$rs->description}}</td>
                                        <td >{{$rs->price}}</td>
                                        <td >{{$rs->number}}</td>
                                        <td >{{$rs->status}}</td>

                                        <td><a href="{{route('user_room_delete',['id'=>$rs->id,'hotel_id'=>$data->id])}}" onclick="return confirm('Record will be delete! Are you sure?')">
                                                <img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a></td>



                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>





    </div>
</div>


</body>
</html>
