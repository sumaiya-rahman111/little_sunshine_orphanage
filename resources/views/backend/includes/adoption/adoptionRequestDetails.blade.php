@extends('backend.master.mastering')
@section('content')
<!-- content area starts -->

<div class="align-items-center mb-10">
    <div class="showDetails text-center">
        <div class="aboutPick">
        <h1 class="text-secondary h1 my-4">About Details</h1>
        @foreach($userData as $ud)
        @if($ud->id == $datas->adopterId)
        <img style="height:13.5rem;" src="{{ asset('backend/imageStore/signup') }}/{{ $ud->image }}" alt="{{ $datas->id }}">
        @endif
        @endforeach
        @if(!$datas->adopterId)
        <img style="height:13.5rem;" src="{{ asset('backend/imageStore/adopter') }}/{{ $datas->image }}" alt="{{ $datas->id }}">
        @endif
            <div class="detabout">
                <h4 class="mt-4 text-info">FORM NUMBER</h4>
                @if(!$datas->formNumber)
                <p>Filled up by user</p>
                @else
                <p>{{ $datas->formNumber }}</p>
                @endif
                <h4 class="mt-4 text-info">ORPHAN'S ID</h4>
                <h2>{{ $datas->orphanId }}</h2>
                <h4 class="mt-4 text-info">ADOPTER'S ID</h4>
                @if($datas->adopterId == 0)
                <p>Manually Filled up</p>
                @else
                <p>{{ $datas->adopterId }}</p>
                @endif
                <h4 class="mt-4 text-info">ADOPTER'S NAME</h4>
                <p>{{ $datas->adopterName }}</p>
                <h4 class="mt-4 text-info">ADOPTER'S EMAIL</h4>
                <p>{{ $datas->adopterEmail }}</p>
                <h4 class="mt-4 text-info">ADOPTER'S PHONE NUMBER</h4>
                <p>{{ $datas->adopterMobile }}</p>
                <h4 class="mt-4 text-info">ADOPTER'S ALTERNATIVE PHONE NUMBER</h4>
                <p>{{ $datas->adopterAltMobile }}</p>
                <h4 class="mt-4 text-info">ADOPTER'S NID</h4>
                <p>{{ $datas->adopterNid }}</p>
                <h4 class="mt-4 text-info">ADOPTER'S GENDER</h4>
                <p>{{ $datas->adopterGender }}</p>
                <h4 class="mt-4 text-info">SPOUSE NAME</h4>
                <p>{{ $datas->spouseName }}</p>
                <h4 class="mt-4 text-info">ADOPTER'S BANK ACCOUNT NUMBER</h4>
                <p>{{ $datas->adopterBan }}</p>
                <h4 class="mt-4 text-info">ADOPTER'S DATE OF BIRTH</h4>
                <p>{{ $datas->adopterDob }}</p>
                <h4 class="mt-4 text-info">ADOPTER'S PRESENT ADDRESS</h4>
                <p>{{ $datas->adopterPa }}</p>
                <h4 class="mt-4 text-info">ADOPTER'S PERMANENT ADDRESS</h4>
                <p>{{ $datas->adopterPeradd }}</p>
                <h4 class="mt-4 text-info">REASON OF ADOPTION</h4>
                <p>{{ $datas->adopterReason }}</p>
            </div>
        </div>
        <a href="{{ Route('adoptionRequest') }}" class="back button button-outline button-info text-center button-md mt-3">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>
</div>

<!-- content area ends -->
@endsection



@section('script')


@endsection