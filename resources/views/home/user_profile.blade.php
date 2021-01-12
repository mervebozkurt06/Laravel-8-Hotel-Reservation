@extends('layouts.home')

@section('title','User Profile')



@section('content')


    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> Home
                <small>USER PROFILE</small>
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
                <li class="breadcrumb-item active">User Profile</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-9">
                @include('profile.show')
            </div>
            <div class="col-md-3 blog-right-side">
                @include('home.usermenu')
            </div>



        </div>
        <!-- /.jumbotron -->

    </div>
    <!-- /.container -->





@endsection
