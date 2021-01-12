@extends('layouts.home')

@section('title','References-'.$setting->title)
@section('description'){{ $setting->description }}@endsection

@section('keywords',$setting->keywords)


@section('content')


    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> Home
                <small>References</small>
            </h1>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">References</li>
            </ol>
        </div>

        <div class="error-contents">
            {!! $setting->references !!}

        </div>
        <!-- /.jumbotron -->

    </div>
    <!-- /.container -->





@endsection
