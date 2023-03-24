@extends('frontend.master.mastering')

@section('link')
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/home.css">
@endsection

@section("content")

@include('frontend.includes.banner')
@include('frontend.includes.involve')
@include('frontend.includes.about')
@include('frontend.includes.facilities')
@include('frontend.includes.events')
@include('frontend.includes.news')
@include('frontend.includes.adoption')
@include('frontend.includes.donate')
@include('frontend.includes.contact')

@endsection


@section('script')
    <script src="{{ asset('frontend') }}/js/script.js"></script>
@endsection