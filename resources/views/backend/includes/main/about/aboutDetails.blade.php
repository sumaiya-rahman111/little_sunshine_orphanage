@extends('backend.master.mastering')
@section('content')
<!-- content area starts -->

<div class="align-items-center mb-10">
    <div class="showDetails text-center">
        <div class="aboutPick">
        <h1 class="text-secondary h1 my-4">About Details</h1>
        <img src="{{ asset('frontend/images/about') }}/{{ $datas->image }}" alt="{{ $datas->id }}">
            <div class="detabout">
                <h4 class="mt-4 text-info">HEADING</h4>
                <h2>{{ $datas->heading }}</h2>
                <h4 class="mt-4 text-info">DESCRIPTION</h4>
                <p>{{ $datas->desc }}</p>
                <h4 class="mt-4 text-info">POINT 1</h4>
                <p>{{ $datas->p1 }}</p>
                <h4 class="mt-4 text-info">POINT 2</h4>
                <p>{{ $datas->p2 }}</p>
                <h4 class="mt-4 text-info">POINT 3</h4>
                <p>{{ $datas->p3 }}</p>
                <h4 class="mt-4 text-info">POINT 4</h4>
                <p>{{ $datas->p4 }}</p>
                <h4 class="mt-4 text-info">CONTACT NUMBER</h4>
                <p>{{ $datas->aboutPhoneNumber }}</p>
                <h4 class="mt-4 text-info">EMAIL</h4>
                <p>{{ $datas->aboutEmailAddress }}</p>
                <h4 class="mt-4 text-info">LOCATION</h4>
                <p>{{ $datas->aboutLocation }}</p>
            </div>
        </div>
        <a href="{{ Route('manageAboutOption') }}" class="back button button-outline button-info text-center button-md mt-3">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>
</div>

<!-- content area ends -->
@endsection



@section('script')


@endsection