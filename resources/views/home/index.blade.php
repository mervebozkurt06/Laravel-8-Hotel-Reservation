@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp


@extends('layouts.home')

@section('title',$setting->title)
@section('description'){{ $setting->description }}@endsection

@section('keywords',$setting->keywords)


@section('content')
    @include('home._slider')

    <!-- Page Content -->
    <div class="container">
        <div class="services-bar">
            <h1 class="my-4">Our Best Services </h1>
            <!-- Services Section -->
            <div class="row">

                @foreach($daily as $rs)
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <h4 class="card-header">{{$rs->title}}</h4>
                            <div class="card-img">
                                <img class="img-fluid" style="height: 200px;weight:300px;"  src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="" />
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{$rs->address}}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- /.row -->
        </div>
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
                @foreach($picked as $rs)
                    <div class="col-lg-6">
                        <h2>{{$rs->title}}</h2>
                        <p>{{$rs->country}}</p>
                        <h5>{{$rs->address}}</h5>
                        <p> {!!$rs->star !!} Star</p>
                        <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="btn btn-primary">Learn More</a>
                    </div>

                    <div class="col-lg-6">
                        <img class="img-fluid rounded"   src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"  alt="" />
                    </div>
                @endforeach
            </div>
            <!-- /.row -->
        </div>
        <!-- Portfolio Section -->
        <div class="portfolio-main">
            <h2>The Most Popular Hotels</h2>
            <div class="row">

                @foreach($last as $rs)
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <div class="card-img">
                                <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                    <img class="card-img-top" style="height: 200px;weight:300px;"  src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"  alt="" />
                                    <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{asset('assets')}}/#">{{$rs->title}}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <!-- /.row -->
        </div>
        <hr>
        <!-- Get In Touch Now Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}">Get In Touch Now</a>
            </div>
        </div>
    </div>
    <!-- /.container -->


@endsection

