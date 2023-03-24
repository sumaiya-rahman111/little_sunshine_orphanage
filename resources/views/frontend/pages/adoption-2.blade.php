@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/adoption-2.css">

@endsection





<!-- main content starts here -->
@section('content')


<section id="adoption-2">
    <div class="container">
      <div class="adoption-2">

        <h1>Apply For Adoption</h1>

        <div class="orphan-info">

          <div class="orph-image">
            <img src="{{ asset('backend/imageStore/orphans') }}/{{ $specific->picture }}" alt="{{ $specific->name }}">
          </div>

          <div class="orph-text">

            <div class="orph-name">
              <p>
                <b>Name : </b>
                <span>{{ $specific->name }}</span>
              </p>
            </div>

            <div class="orph-id">
              <p>
                <b>ID : </b>
                <span>{{ $specific->id }}</span>
              </p>
            </div>

          </div>

        </div>

        <form action="{{ route('adoptionRequestSubmit',$specific->id) }}" method="post">
          @csrf
          <h3>Adopter's Information</h3>
          <input name="adopterName" type="text" placeholder="Full Name">
          <input name="adopterEmail" type="text" placeholder="Email">
          <input name="adopterMobile" type="tel" placeholder="Mobile">
          <input name="adopterBan" type="text" placeholder="Bank Account Number">
          <input name="adopterNid" type="text" placeholder="NID Number">
          <input name="adopterDob" type="text" placeholder="Date of Birth">
          <input name="adopterPa" type="text" placeholder="Present Address">
          <input name="adopterPeradd" type="text" placeholder="Permanent Address">
          <input name="adopterReason" type="text" placeholder="Reasons for Adopting Child">

          <div class="adopt-btn">
            <button>Submit</button>
          </div>

        </form>

      </div>
    </div>
  </section>


  
  @endsection
<!-- main content ends here -->



@section('script')


@endsection