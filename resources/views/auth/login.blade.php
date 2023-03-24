@include('backend.includes.top')

<div class="d-flex align-items-center justify-content-center ht-100v">
      <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
        <source src="{{ asset('backend/assets') }}/videos/video1.mp4" type="video/mp4">
        <source src="{{ asset('backend/assets') }}/videos/video1.ogv" type="video/ogg">
        <source src="{{ asset('backend/assets') }}/videos/video1.webm" type="video/webm">
      </video><!-- /video -->

        <form method="POST" action="{{ route('login.store') }}" enctype="multipart/form-data">
            @csrf


            <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
                <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
                <div class="signin-logo tx-center tx-28 tx-bold tx-white mg-b-10">
                    <img style="width:60%;" src="{{ asset('backend/assets/images/logo/logo_light.png') }}">
                </div>
                <div class="tx-white-5 tx-center">Log In!</div>


                <div class="row">
                    <div class="col-lg-12 p-2">

                        <div class="form-group">
                            <input name="email" type="email" class="form-control fc-outline-dark my-2" placeholder="Enter your email">
                        </div><!-- email -->

                        <div class="form-group">
                            <input name="password" type="password" class="form-control fc-outline-dark my-2" placeholder="Enter your password">
                        </div><!-- password -->

                        <div class="mg-t-10 tx-center"><a href="{{ route('password.request') }}" class="tx-info secondary_color">Forget Password? Reset Password!</a></div>
                        </div><!-- login-wrapper -->

                        <button type="submit" class="bttn btn-sm btn-block">Log In</button>
                        <!-- <a href="{{ route('loginwithgoogle') }}" class="bttn btn-sm btn-block text-center"><i class="fa-brands fa-google"></i></a> -->

                        <div class="mg-t-20 tx-center">Not a member? <a href="{{ route('register') }}" class="tx-info secondary_color">Sign Up</a></div>
                        </div><!-- login-wrapper -->

                    </div>
                </div>
            </div><!-- overlay-body -->
        </form>

        



    </div><!-- d-flex -->


    @include('backend.includes.scripts')

