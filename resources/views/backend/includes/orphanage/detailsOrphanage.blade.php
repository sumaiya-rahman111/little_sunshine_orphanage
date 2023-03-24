@extends('backend.master.mastering')
@section('content')
<!-- content area starts -->

<div class="align-items-center mb-10">
    <div class="showDetails text-center">
        <div class="aboutPick">
        <h1 class="text-secondary h1 my-4">Orphanage Details</h1>
        <img src="{{ asset('backend/imageStore/orphanages') }}/{{ $datas->photo }}" alt="{{ $datas->id }}">
            <div class="detabout">
                <h4 class="mt-4 text-info">NAME</h4>
                <h2>{{ $datas->name }}</h2>
                <h4 class="mt-4 text-info">SHORT DESCRIPTION</h4>
                <p>{{ $datas->short_desc }}</p>
                <h4 class="mt-4 text-info">DESCRIPTION</h4>
                <p>{{ $datas->desc }}</p>
                <h4 class="mt-4 text-info">LOCATION</h4>
                <p>{{ $datas->location }}</p>
                <h4 class="mt-4 text-info">EMAIL</h4>
                <p>{{ $datas->email }}</p>
            </div>
        </div>
        <a href="{{ Route('manageOrphanage') }}" class="back button button-outline button-info text-center button-md mt-3">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>
</div>

<!-- content area ends -->
@endsection



@section('script')


@endsection