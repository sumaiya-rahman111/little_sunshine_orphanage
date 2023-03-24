@include('backend.includes.top')

<div class="d-flex align-items-center justify-content-center ht-100v">
      <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
        <source src="{{ asset('backend/assets') }}/videos/video1.mp4" type="video/mp4">
        <source src="{{ asset('backend/assets') }}/videos/video1.ogv" type="video/ogg">
        <source src="{{ asset('backend/assets') }}/videos/video1.webm" type="video/webm">
      </video><!-- /video -->

<form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
    @csrf


      <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-600 wd-xs-650 pd-25 pd-xs-40 rounded bg-black-6">
          <div class="signin-logo tx-center tx-28 tx-bold tx-white mg-b-20">
              <img style="width:60%;" src="{{ asset('backend/assets/images/logo/logo_light.png') }}">
          </div>
          <div class="tx-white-5 tx-center mg-b-20">Be a part of us Today!</div>


        <div class="row">

          <div class="col-lg-6 p-2">
            <div class="form-group">
                <input name="name" type="text" class="form-control fc-outline-dark my-2" placeholder="Enter your name">
            </div><!-- name-->

            <div class="form-group">
                <input name="email" type="email" class="form-control fc-outline-dark my-2" placeholder="Enter your email">
            </div><!-- email -->

            <div class="form-group">
                <input name="username" type="text" class="form-control fc-outline-dark my-2" placeholder="Enter your username">
            </div><!-- username -->

            <div class="form-group">
                <input name="phone_number" type="text" class="form-control fc-outline-dark my-2" placeholder="Enter your phone number">
            </div><!-- phone number -->

            <div class="form-group">
                <input name="password" type="password" class="form-control fc-outline-dark my-2" placeholder="Enter your password">
            </div><!-- password -->

            <div class="form-group">
                <input name="password_confirmation" type="password" class="form-control fc-outline-dark my-2" placeholder="Confirm your password">
                
            </div><!-- confirm password -->

            <div class="form-group">
            <select name="role" class="form-control fc-outline-dark my-2">
              <option value="0" selected>User</option>
              <option value="10">Orphan</option>
              <option value="3">Grade 1 staff</option>
                  <!-- management -->
              <option value="4">Grade 2 staff</option>
              <!-- grade 2 teacher,mentor,doctor -->
              <option value="5">Grade 3 staff</option>
              <!-- grade 3 accounts -->
              <option value="6">Grade 4 staff</option>
              <!-- grade 4 cleaner -->
              <option value="7">Volunteer</option>
              <option value="8">Adopter</option>
              <option value="9">Contributor</option>
          </select>
            </div><!-- role -->
          </div>

          <!-- preloaded -->
          <div class="col-lg-6 col-12 mb-20 my-2 mt-4">
              <h5>Enter Your Picture</h5>
              <input name="image" class="dropify file_drop" type="file" data-default-file="{{ asset('backend') }}/assets/images/error/error-2.png">
          </div>
          <!-- preloaded -->
        </div>

          <button type="submit" class="bttn btn-sm btn-block">Register</button>

          <div class="mg-t-60 tx-center">Already a member? <a href="{{ route('login') }}" class="tx-info secondary_color">Sign In</a></div>
        </div><!-- login-wrapper -->
      </div><!-- overlay-body -->
</form>



    </div><!-- d-flex -->


    @include('backend.includes.scripts')

