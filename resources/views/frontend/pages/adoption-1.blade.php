@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/adoption-1.css">

@endsection





<!-- main content starts here -->
@section('content')


<section id="adoption-1">
    <div class="container">
      <div class="adoption-1">
        <h1>Apply For Adoption</h1>
        <form action="{{ Route('adoptionRequestSubmitNav') }}" method="post">
          @csrf
          <h3>Adopter's Information</h3>
          <input name="adopterName" type="text" placeholder="Full Name">
          <input name="adopterEmail" type="email" placeholder="Email">
          <input name="adopterMobile" type="tel" placeholder="Mobile">
          <input name="adopterBan" type="number" placeholder="Bank Account Number">
          <input name="adopterNid" type="number" placeholder="NID Number">
          <input name="adopterDob" type="text" placeholder="Date of Birth">
          <input name="adopterPa" type="text" placeholder="Present Address">
          <input name="adopterPeradd" type="text" placeholder="Permanent Address">
          <input name="adopterReason" type="text" placeholder="Reasons for Adopting Child">
          <label for="orphanId">Select the Orphan Id below:</label>
          <select style="background:none;" name="orphanId" class="form-control">
          <?php $count = 0; ?> 
            @foreach($datas as $data)
              @foreach($orphanid as $oid)
                @if($data->id == $oid->orphanId)
                  <?php $count++; ?>
                @endif
              @endforeach
              @if($count == 0)
                <option value="{{ $data->id }}">{{$data->id}}</option>
              @endif
              <?php $count = 0; ?>
            @endforeach
          </select>

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