@extends('layouts.admin')

@section('title','Frequently Asked Question List')

@section('content')

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Hotel List </h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Frequently Asked Questions</a></li>
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
                        <div class="card-header">
                            @include('home.message')
                            <a href="{{route('admin_faq_add')}}" class="btn btn-primary">Add Frequently Asked Question </a>


                        </div>
                        <div class="card-body">
                            <div class="table">
                                <div id="example3_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example3" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example3_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="width: 27px;">Position</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="width: 27px;">Question</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="width: 111px;">Answer</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="width: 111px;">Status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="width: 111px;">Edit</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="width: 111px;">Delete</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <tr role="row" class="odd">
                                                        <td>{{$rs->position}}</td>
                                                        <td>{{$rs->question}}</td>
                                                        <td>{!! $rs->answer !!}</td>
                                                        <td>{{$rs->status}}</td>
                                                        <td>
                                                            <a href="{{route('admin_faq_edit',['id'=>$rs->id])}}">
                                                                <img src="{{asset('assets/admin/images')}}/edit.png" height="30"></a>
                                                        </td>
                                                        <td>
                                                            <a href="{{route('admin_faq_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')">
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
        <!-- ============================================================== -->
    </div>
@endsection

@section('footer')



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>


@endsection
