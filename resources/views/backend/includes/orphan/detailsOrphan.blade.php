@extends('backend.master.mastering')
@section('content')
<!-- content area starts -->

<div class="align-items-center mb-10">
    <div class="showDetails text-center">
        <div class="aboutPick">
        <h1 class="text-secondary h1 my-4">Orphan Details</h1>
        <img src="{{ asset('backend/imageStore/orphans') }}/{{ $datas->picture }}" alt="{{ $datas->id }}">
            <div class="detabout">
                <h4 class="mt-4 text-info">NAME</h4>
                <h2>{{ $datas->name }}</h2>

                <h4 class="mt-4 text-info">FATHER'S NAME</h4>
                @if($datas->fathers_name == null)
                <p>Unknown</p>
                @else
                <p>{{ $datas->fathers_name }}</p>
                @endif

                <h4 class="mt-4 text-info">MOTHER'S NAME</h4>
                @if($datas->mothers_name == null)
                <p>Unknown</p>
                @else
                <p>{{ $datas->mothers_name }}</p>
                @endif

                <h4 class="mt-4 text-info">BIRTH DATE</h4>
                @if($datas->birth_date == null)
                <p>Unknown</p>
                @else
                <p>{{ $datas->birth_date }}</p>
                @endif

                <h4 class="mt-4 text-info">BIRTH PLACE</h4>
                @if($datas->birth_place == null)
                <p>Unknown</p>
                @else
                <p>{{ $datas->birth_place }}</p>
                @endif

                <h4 class="mt-4 text-info">BIRTH CERTIFICATE NUMBER</h4>
                @if($datas->birth_certifiate == null)
                <p>Unknown</p>
                @else
                <p>{{ $datas->birth_certificate }}</p>
                @endif

                <h4 class="mt-4 text-info">BIRTH MARK</h4>
                @if($datas->birth_mark == null)
                <p>Unknown</p>
                @else
                <p>{{ $datas->birth_mark }}</p>
                @endif
                
                <h4 class="mt-4 text-info">SKIN COLOR</h4>
                @if($datas->skin_color == null)
                <p>Unknown</p>
                @else
                <p>{{ $datas->skin_color }}</p>
                @endif

                <h4 class="mt-4 text-info">EYE COLOR</h4>
                @if($datas->eye_color == null)
                <p>Unknown</p>
                @else
                <p>{{ $datas->eye_color }}</p>
                @endif

                <h4 class="mt-4 text-info">DISABILITIES</h4>
                @if($datas->disabilities == null)
                <p>Not Applicable</p>
                @else
                <p>{{ $datas->disabilities }}</p>
                @endif

                <h4 class="mt-4 text-info">FOUND PLACE</h4>
                @if($datas->found_place == null)
                <p>Unknown</p>
                @else
                <p>{{ $datas->found_place }}</p>
                @endif

                <h4 class="mt-4 text-info">RELIGION</h4>
                @if($datas->religion == null)
                <p>Unknown</p>
                @else
                <p>{{ $datas->religion }}</p>
                @endif

                <h4 class="mt-4 text-info">GENDER</h4>
                <p>@if($datas->gender == 1)Male @elseif($datas->gender == 2) Female @else Its Complicated @endif</p>
            </div>
        </div>
        <a href="{{ Route('orphanList') }}" class="back button button-outline button-info text-center button-md mt-3">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>
</div>

<!-- content area ends -->
@endsection



@section('script')


@endsection