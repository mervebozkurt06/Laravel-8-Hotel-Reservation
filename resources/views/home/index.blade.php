@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp


@extends('layouts.home')

@section('title',$setting->title)
@section('description'){{ $setting->description }}@endsection

@section('keywords',$setting->keywords)


