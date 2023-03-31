@extends('backend.master.mastering')
@section('content')
<!-- content area starts -->

<div class="align-items-center mb-10">
    <div class="showDetails text-center">
        <div class="aboutPick">
        <h1 class="text-secondary h1 my-4">Partner Details</h1>
        
            <div class="detabout">
                <h4 class="mt-4 text-info">NAME</h4>
                <h2>{{ $datas->name }}</h2>
                <h4 class="mt-4 text-info">EMAIL</h4>
                <p>{{ $datas->email }}</p>
                <h4 class="mt-4 text-info">COMPANY NAME</h4>
                @if($datas->company)
                <p>{{ $datas->company }}</p>
                @else
                <p>unavailable</p>
                @endif
                <h4 class="mt-4 text-info">TRADE LISCENSE NUMBER</h4>
                @if($datas ->tlNumber)
                <p>{{ $datas->tlNumber }}</p>
                @else
                <p>unavailable</p>
                @endif
                <h4 class="mt-4 text-info">BANK NAME</h4>
                <p>{{ $datas->bank }}</p>
                <h4 class="mt-4 text-info">BRANCH NAME</h4>
                @if($datas->branch)
                <p>{{ $datas->branch }}</p>
                @else
                <p>unavailable</p>
                @endif
                <h4 class="mt-4 text-info">AREA CODE</h4>
                <p>{{ $datas->area }}</p>
                <h4 class="mt-4 text-info">ACCOUNT NUMBER</h4>
                <p>{{ $datas->account }}</p>
                <h4 class="mt-4 text-info">PHONE NUMBER</h4>
                <p>{{ $datas->phone }}</p>
                <h4 class="mt-4 text-info">ADDRESS</h4>
                <p>{{ $datas->address }}</p>
            </div>
        </div>
        <a href="{{ Route('partnerRequest') }}" class="back button button-outline button-info text-center button-md mt-3">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>
</div>

<!-- content area ends -->
@endsection



@section('script')


@endsection