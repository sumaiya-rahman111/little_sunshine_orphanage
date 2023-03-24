@extends('backend.master.mastering')
@section('content')
<!-- content area starts -->

<div class="align-items-center mb-10">
    <div class="showDetails text-center">
        <div class="aboutPick">
        <h1 class="text-secondary h1 my-4">Facility Details</h1>
            <img src="{{ asset('frontend/images/facilities') }}/{{ $datas->image }}" alt="{{ $datas->id }}">
            <div class="detabout">
                <h4 class="mt-4 text-info">HEADING</h4>
                <h2>{{ $datas->heading }}</h2>
                <h4 class="mt-4 text-info">DESCRIPTION</h4>
                <p>{{ $datas->desc }}</p>
            </div>
        </div>
        <a href="{{ Route('manageFacilities') }}" class="back button button-outline button-info text-center button-md mt-3">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>
</div>

<!-- content area ends -->
@endsection



@section('script')


@endsection