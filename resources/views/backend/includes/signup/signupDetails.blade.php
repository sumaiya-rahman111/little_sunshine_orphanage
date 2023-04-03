@extends('backend.master.mastering')
@section('content')
<!-- content area starts -->

<div class="align-items-center mb-10">
    <div class="showDetails text-center">
        <div class="aboutPick">
        <h1 class="text-secondary h1 my-4">User Details</h1>
        <img style = "height:13.5rem;" src="{{ asset('backend/imageStore/signup') }}/{{ $datas->image }}" alt="{{ $datas->name }}">
            <div class="detabout">
                <h4 class="mt-4 text-info">NAME</h4>
                <h2>{{ $datas->name }}</h2>
                <h4 class="mt-4 text-info">ID</h4>
                <p>{{ $datas->id }}</p>
                <h4 class="mt-4 text-info">EMAIL</h4>
                <p>{{ $datas->email }}</p>
                <h4 class="mt-4 text-info">USERNAME</h4>
                <p>{{ $datas->username }}</p>
                <h4 class="mt-4 text-info">PHONE NUMBER</h4>
                <p>{{ $datas->phone_number }}</p>
                <h4 class="mt-4 text-info">ROLE</h4>
                @if($datas->role == 1)
                <p>CEO</p>
                @elseif($datas->role == 2)
                <p>MD</p>
                @elseif($datas->role == 3)
                <p>Grade 1 Staff</p>
                @elseif($datas->role == 4)
                <p>Grade 2 Staff</p>
                @elseif($datas->role == 5)
                <p>Grade 3 Staff</p>
                @elseif($datas->role == 6)
                <p>Grade 4 Staff</p>
                @elseif($datas->role == 7)
                <p>Volunteer</p>
                @elseif($datas->role == 8)
                <p>Adopter</p>
                @elseif($datas->role == 9)
                <p>Contributor</p>
                @elseif($datas->role == 10)
                <p>Orphan</p>
                @elseif($datas->role == 0)
                <p>User</p>
                @elseif($datas->role == 101)
                <p>Requesting for Staff Account</p>
                @endif
            </div>
        </div>
        <a href="{{ Route('signedUpList') }}" class="back button button-outline button-info text-center button-md mt-3">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>
</div>

<!-- content area ends -->
@endsection



@section('script')


@endsection