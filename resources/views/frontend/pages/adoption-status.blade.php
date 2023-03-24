@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/adoption-status.css">

@endsection





<!-- main content starts here -->
@section('content')


@if($arsData)
<section id="adoption-status">
    <div class="container">
      <div class="adoption-status">

        <h1>Adoption Request Status</h1>

        <div class="status-box">
          <h5>
            <b>Status :</b>
            <span>{{ $arsData->adoptionStatus }}</span>
          </h5>
        </div>

        <div class="orphan-info">
          <h3>Child's Information</h3>
          <div class="orph-image">
            <img src="{{ asset('backend/imageStore/orphans') }}/{{ $orphanData->picture }}" alt="{{ $orphanData->name }}">
          </div>

          <div class="orph-text">

            <div class="orph-name">
              <p>
                <b>Name : </b>
                <span>{{ $orphanData->name }}</span>
              </p>
            </div>

            <div class="orph-id">
              <p>
                <b>ID : </b>
                <span>{{ $orphanData->id }}</span>
              </p>
            </div>

          </div>

        </div>

        <!-- <form action="#"> -->
          <h3>Adopter's Information</h3>
          
          <p>
            <b>Full Name :</b>
            <span>{{ $arsData->adopterName }}</span>
          </p>

          <p>
            <b>Email :</b>
            <span>{{ $arsData->adopterEmail }}</span>
          </p>

          <p>
            <b>Mobile No :</b>
            <span>{{ $arsData->adopterMobile }}</span>
          </p>

          <p>
            <b>Bank Account Number :</b>
            <span>{{ $arsData->adopterBan }}</span>
          </p>

          <p>
            <b>NID Number :</b>
            <span>{{ $arsData->adopterNid }}</span>
          </p>

          <p>
            <b>Date of Birth :</b>
            <span>{{ $arsData->adopterDob }}</span>
          </p>

          <p>
            <b>Present Address :</b>
            <span>{{ $arsData->adopterPa }}</span>
          </p>

          <p>
            <b>Permanent Address :</b>
            <span>{{ $arsData->adopterPeradd }}</span>
          </p>

          <p>
            <b>Reasons for Adopting Child :</b>
            <span>{{ $arsData->adopterReason }}</span>
          </p>

        <!-- </form> -->

      </div>
    </div>
  </section>
@endif


  @endsection
<!-- main content ends here -->



@section('script')


@endsection