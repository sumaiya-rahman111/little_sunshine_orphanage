@extends('backend.master.mastering')
@section('content')
<!-- content area starts -->

<div class="align-items-center mb-10">
    <div class="showDetails text-center">
        <div class="aboutPick">
        <h1 class="text-secondary h1 my-4">Adopted Details</h1>
        @foreach($orphanData as $oData)
        @if($datas->orphanId == $oData->id)
        <img style="height:13.5rem;" src="{{ asset('backend/imageStore/orphans') }}/{{ $oData->picture }}" alt="{{ $datas->id }}">
        @endif
        @endforeach
        
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
                @if($datas->adopterAltMobile)
                <p>{{ $datas->adopterAltMobile }}</p>
                @else
                <p>Unavailable</p>
                @endif
                <h4 class="mt-4 text-info">ADOPTER'S NID</h4>
                <p>{{ $datas->adopterNid }}</p>
                <h4 class="mt-4 text-info">ADOPTER'S GENDER</h4>
                @if($datas->adopterGender)
                <p>{{ $datas->adopterGender }}</p>
                @else
                <p>Unavailable</p>
                @endif
                <h4 class="mt-4 text-info">SPOUSE NAME</h4>
                @if($datas->spouseName)
                <p>{{ $datas->spouseName }}</p>
                @else
                <p>Unavailable</p>
                @endif
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
        <a href="{{ Route('adoptedBabyList') }}" class="back button button-outline button-info text-center button-md mt-3">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>
</div>

<!-- content area ends -->
@endsection



@section('script')


@endsection