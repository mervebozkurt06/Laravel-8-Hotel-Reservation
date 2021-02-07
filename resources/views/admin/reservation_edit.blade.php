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

                    <form action="{{route('admin_reservation_edit',['id'=>$data->id])}}" method="post" id="basicform" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>User Id</label>
                                <input type="text" value="{{$data->user->name}}" name="user_id" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Room Id</label>
                                <input type="text" name="room_id" value="{{$data->room->title}}"  data-parsley-trigger="change"   autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Hotel</label>
                                <input type="text" name="hotel_id" value="{{$data->hotel->title}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Name-Surname</label>
                                <input type="text" name="name" value="{{$data->name}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="{{$data->email}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" value="{{$data->phone}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <input type="text" name="message" value="{{$data->message}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Days</label>
                                <input type="text" name="days" value="{{$data->days}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Check In</label>
                                <input type="text" name="checkin" value="{{$data->checkin}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Check Out</label>
                                <input type="text" name="checkout" value="{{$data->checkout}}" data-parsley-trigger="change"   autocomplete="off" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Adult</label>
                                <input type="text" name="adult" value="{{$data->adult}}"  data-parsley-trigger="change"   autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kid</label>
                                <input type="text" name="kid"  value="{{$data->kid}}"  data-parsley-trigger="change"   autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Total</label>
                                <input type="text" name="total"  value="{{$data->total}}"  data-parsley-trigger="change"   autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Note</label>
                                <input type="text" name="note" id="note"  value="{{$data->note}}"  data-parsley-trigger="change"   autocomplete="off" class="form-control">
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
                                        <button type="submit" class="btn btn-space btn-primary">Update Reservation</button>
                                        <button class="btn btn-space btn-secondary">Cancel</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


