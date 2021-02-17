@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp
@extends('layouts.home')
@section('title',$setting->title)
@section('description'){{ $setting->description }}@endsection
@section('keywords',$setting->keywords)
@section('content')
    @include('home._slider')
    <div class="container">
        <div class="about-main">
            <div class="row">
                <div class="col-md-12 blog-right-side">
                    <div class="card mb-12">
                        <h5 class="card-header">What are you looking for?</h5>
                        <div class="card-body">
                            <div class="input-group">
                                <form action="{{route('gethotel')}}" method="post">
                                    @csrf
                                    @livewire('search')
                                    <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">Search!</button>
                                </span>
                                </form>
                                @section('footerjs')
                                    @livewireScripts
                                @endsection
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <div class="portfolio-main">
            <h2>Picked for You</h2>
            <div class="row">

                @foreach($daily as $rs)
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <div class="card-img">
                                <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                    <img class="card-img-top" style="height: 200px;weight:300px;"  src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"  alt="" />
                                    <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                                </a>
                            </div>
                            @php
                                $avgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                                $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                            @endphp
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}}</a>

                                    <h5>{{$countreview}} Review(s)</h5>
                                    <h5><i class="fas fa-star">{{$avgrev}}</i></h5>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- /.row -->
        </div>
        <!-- About Section -->

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
                            @php
                                $avgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                                $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                            @endphp
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}}</a>

                                    <h5>{{$countreview}} Review(s)</h5>
                                    <h5><i class="fas fa-star">{{$avgrev}}</i></h5>
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

            <div class="col-md-12">
                <a class="btn btn-lg btn-secondary btn-block" href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}">Get In Touch Now</a>
            </div>
        </div>
    </div>
    <!-- /.container -->


@endsection

