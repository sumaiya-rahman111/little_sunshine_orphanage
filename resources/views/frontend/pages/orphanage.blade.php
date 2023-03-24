@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/home.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/orphanage-list.css">

@endsection


<!-- main content starts here -->
@section('content')

<section id="orphanage-list">
    <div class="container">
    <h1>Orphanages Connected With Us</h1>
    @foreach($datas as $data)
    <div class="orphanage">
      <div class="orph-list">
        <div class="orph-title">
          <h3>{{ $data->name }}</h3>
        </div>
        <div class="orph-desc">
          <p>{{ $data->short_desc }}</p>
        </div>
        <div class="orph-footer">
          <div class="orph-address">
            <p>{{ $data->email }}</p>
            <p>{{ $data->location }}</p>
          </div>
          <div class="orph-button">
            <a href="{{ route('orphanageDetails',$data->id) }}" class="buttn btn_rounded">View Details</a>
          </div>
        </div>
      </div>
      <div class="orph-image">
        <img src="{{ asset('backend/imageStore/orphanages') }}/{{ $data->photo }}" alt="orphanage-1">
      </div>
    </div>
    @endforeach
    </div>
  </section>


@endsection
<!-- main content ends here -->



@section('script')

    <script src="{{ asset('frontend') }}/js/script.js"></script>

@endsection