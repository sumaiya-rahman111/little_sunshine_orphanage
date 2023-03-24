@extends('backend.master.mastering')
@section('content')
<!-- content area starts -->

<div class="align-items-center mb-10">
    <div class="showDetails text-center">
        <div class="aboutPick">
        <h1 class="text-secondary h1 my-4">Involve Details</h1>
            <div class="detabout">
                <h4 class="mt-4 text-info">HEADING</h4>
                <h2>{{ $datas->heading }}</h2>
                <h4 class="mt-4 text-info">DESCRIPTION</h4>
                <p>{{ $datas->desc }}</p>
                <h4 class="mt-4 text-info">BUTTON</h4>
                <p>{{ $datas->button }}</p>
                <h4 class="mt-4 text-info">ACTION</h4>
                <p>{{ $datas->action }}</p>
            </div>
        </div>
        <a href="{{ Route('manageInvolve') }}" class="back button button-outline button-info text-center button-md mt-3">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>
</div>

<!-- content area ends -->
@endsection



@section('script')


@endsection