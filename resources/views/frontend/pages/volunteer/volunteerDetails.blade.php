@extends('backend.master.mastering')
@section('content')
<!-- content area starts -->

<div class="align-items-center mb-10">
    <div class="showDetails text-center">
        <div class="aboutPick">
        <h1 class="text-secondary h1 my-4">Volunteer Details</h1>
        <img src="{{ asset('frontend/images/volunteer') }}/{{ $datas->image }}" alt="{{ $datas->name }}">
            <div class="detabout">
                <h4 class="mt-4 text-info">NAME</h4>
                <h2>{{ $datas->name }}</h2>
                <h4 class="mt-4 text-info">EMAIL</h4>
                <p>{{ $datas->email }}</p>
                <h4 class="mt-4 text-info">IDENTITY TYPE</h4>
                <p>{{ $datas->identype }}</p>
                <h4 class="mt-4 text-info">IDENTITY NUMBER</h4>
                <p>{{ $datas->identity }}</p>
                <h4 class="mt-4 text-info">PHONE NUMBER</h4>
                <p>{{ $datas->phone }}</p>
                <h4 class="mt-4 text-info">ADDRESS</h4>
                <p>{{ $datas->address }}</p>
                <h4 class="mt-4 text-info">VOLUNTEER SKILL AREA</h4>
                @if($datas->op1)
                    <p>Hospitals</p>
                @endif
                @if($datas->op2)
                    <p>Orphanages</p>
                @endif
                @if($datas->op3)
                    <p>Schools</p>
                @endif
                @if($datas->op4)
                    <p>Community Services</p>
                @endif
                @if($datas->op5)
                    <p>Arts and Entertainment</p>
                @endif
            </div>
        </div>
        <a href="{{ Route('volunteerRequest') }}" class="back button button-outline button-info text-center button-md mt-3">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>
</div>

<!-- content area ends -->
@endsection



@section('script')


@endsection