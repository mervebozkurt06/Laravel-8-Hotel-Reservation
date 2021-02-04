@extends('layouts.home')

@section('title','Frequently Asked Question')
@section('content')
    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">FAQ
                <small>Frequently Asked Questions</small>
            </h1>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">FAQ</li>
            </ol>
        </div>

        <div class="faq-main">
            <div class="" id="accordion" role="tablist" aria-multiselectable="true">
                @foreach($datalist as $rs)
                    <div class="card accordion-single">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#{{$rs->position}}" aria-expanded="false" aria-controls="collapseThree">
                                    {{$rs->question}}
                                </a>
                            </h5>
                        </div>
                        <div id="{{$rs->position}}" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                                {!! $rs->answer !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <!-- /.container -->





@endsection
