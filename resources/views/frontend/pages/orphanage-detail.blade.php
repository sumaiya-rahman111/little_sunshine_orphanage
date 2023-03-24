@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/orphanage-detail.css">

@endsection





<!-- main content starts here -->
@section('content')


<section id="orphanage-detail-page">
    <div class="container">
      <div class="orphanage-detail">
        <h1>{{ $od->name }}</h1>
        <p>{{ $od->short_desc }}</p>

        <div class="orphng-image">
          <img src="{{ asset('backend/imageStore/orphanages') }}/{{ $od->photo }}" alt="orphng-1">
        </div>

        <p>{{ $od->desc }}</p>

        <div class="contact-us">
          <h2>Contact Info</h2>
          <p>Location: <span>{{ $od->location }}</span></p>
          <p>Contact Number: +880123456789</p>
          <p>Email: <span>{{ $od->email }}</span></p>
        </div>

      </div>
    </div>
  </section>


@endsection
<!-- main content ends here -->



@section('script')


@endsection