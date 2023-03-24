@extends('backend.master.mastering')
@section('content')
<!-- content area starts -->

<div class="align-items-center mb-10">
    <div class="showDetails text-center">
        <div class="aboutPick">
        <h1 class="text-secondary h1 my-4">News Details</h1>
        <img src="{{ asset('frontend/images/news') }}/{{ $datas->photo }}" alt="{{ $datas->id }}">
            <div class="detabout">
                <h4 class="mt-4 text-info">HEADING</h4>
                <h2>{{ $datas->heading }}</h2>
                <h4 class="mt-4 text-info">DATE</h4>
                <p>{{ $datas->date }}</p>
                <h4 class="mt-4 text-info">LOCATION</h4>
                <p>{{ $datas->location }}</p>
                <h4 class="mt-4 text-info">SHORT DESCRIPTION</h4>
                <p>{{ $datas->short_description }}</p>
                <h4 class="mt-4 text-info">FULL DESCRIPTION</h4>
                <p>{{ $datas->full_description }}</p>
            </div>
        </div>
        <a href="{{ Route('manageNews') }}" class="back button button-outline button-info text-center button-md mt-3">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>
</div>

<!-- content area ends -->
@endsection



@section('script')


@endsection