@extends('layouts.home')

@section('title','About Us-'.$setting->title)
@section('description'){{ $setting->description }}@endsection

@section('keywords',$setting->keywords)


@section('content')


    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> Home
                <small>About Us</small>
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
                <li class="breadcrumb-item active">About Us</li>
            </ol>
        </div>

        <div class="error-contents">
            {!! $setting->aboutus !!}

        </div>
        <!-- /.jumbotron -->

    </div>
    <!-- /.container -->





@endsection
