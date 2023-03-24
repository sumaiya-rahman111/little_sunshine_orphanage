@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/orphan-detail.css">

@endsection





<!-- main content starts here -->
@section('content')




<section id="orphan-detail">
    <div class="container">
      <div class="orphan-detail">
        <h1>Detail Information</h1>
        <div class="orphan-image">
          <img src="{{ asset('backend/imageStore/orphans') }}/{{ $osng->picture }}" alt="{{ $osng->name }}">
        </div>
        <div class="orphan-info">
          <div class="name">
            <p>
              <b>Name :</b>
              @if($osng->name)
              <span>{{ $osng->name }}</span>
              @else
              <span>N/A</span>
              @endif
            </p>
          </div>
          <div class="bdate">
            <p>
              <b>Birth Date :</b>
              @if($osng->birthdate)
              <span>{{ $osng->birthdate }}</span>
              @else
              <span>N/A</span>
              @endif
            </p>
          </div>
          <div class="fname">
            <p>
              <b>Father's Name :</b>
              @if($osng->fathers_name)
              <span>{{ $osng->fathers_name }}</span>
              @else
              <span>N/A</span>
              @endif
            </p>
          </div>
          <div class="mname">
            <p>
              <b>Mother's Name :</b>
              @if($osng->mothers_name)
              <span>{{ $osng->mothers_name }}</span>
              @else
              <span>N/A</span>
              @endif
            </p>
          </div>
          <div class="bplace">
            <p>
              <b>Birth Place :</b>
              @if($osng->birth_place)
              <span>{{ $osng->birth_place }}</span>
              @else
              <span>N/A</span>
              @endif
            </p>
          </div>
          <div class="bcertificate">
            <p>
              <b>Birth Certificate Number :</b>
              @if($osng->birth_certificate)
              <span>{{ $osng->birth_certificate }}</span>
              @else
              <span>N/A</span>
              @endif
            </p>
          </div>
          <div class="bmark">
            <p>
              <b>Birth Mark :</b>
              @if($osng->birth_mark)
              <span>{{ $osng->birth_mark }}</span>
              @else
              <span>N/A</span>
              @endif
            </p>
          </div>
          <div class="skin-color">
            <p>
              <b>Skin Color :</b>
              @if($osng->skin_color)
              <span>{{ $osng->skin_color }}</span>
              @else
              <span>N/A</span>
              @endif
            </p>
          </div>
          <div class="eye-color">
            <p>
              <b>Eye Color :</b>
              @if($osng->eye_color)
              <span>{{ $osng->eye_color }}</span>
              @else
              <span>N/A</span>
              @endif
            </p>
          </div>
          <div class="disabilities">
            <p>
              <b>Disabilities :</b>
              @if($osng->disabilities)
              <span>{{ $osng->disabilities }}</span>
              @else
              <span>N/A</span>
              @endif
            </p>
          </div>
          <div class="found-place">
            <p>
              <b>Found Place :</b>
              @if($osng->found_place)
              <span>{{ $osng->found_place }}</span>
              @else
              <span>N/A</span>
              @endif
            </p>
          </div>
          <div class="religion">
            <p>
              <b>Religion :</b>
              @if($osng->religion)
              <span>{{ $osng->religion }}</span>
              @else
              <span>N/A</span>
              @endif
            </p>
          </div>
          <div class="gender">
            <p>
              <b>Gender :</b>
              @if($osng->gender)
                @if($osng->gender == 1)
                <span>Male</span>
                @elseif($osng->gender == 2)
                <span>Female</span>
                @else
                <span>It's Complicated</span>
                @endif
              @else
              <span>N/A</span>
              @endif
            </p>
          </div>
        </div>
        <div>
          @if($datas == null)
              <a href="{{ route('adoptSpecific',$osng->id) }}" class="buttn btn_rounded mt-3">Adopt this Child</a>
          @endif
        </div>
      </div>
    </div>
  </section>


  @endsection
<!-- main content ends here -->



@section('script')


@endsection