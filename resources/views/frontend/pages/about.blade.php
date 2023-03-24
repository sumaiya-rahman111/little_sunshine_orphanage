@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/about.css">

@endsection





<!-- main content starts here -->
@section('content')


<section id="aboutd">
    <div class="container">
        <div class="heading">
            <h1>About Us</h1>
        </div>

        <div class="about-details">
            <div class="about-left">
                <p>{{ $about->desc }}</p>

                <div class="list-experience">
                    <div class="list">
                        <div class="item">
                            <i class="fas fa-check tik_chihno"></i> <p>{{ $about->p1 }}</p>
                        </div>

                        <div class="item">
                            <i class="fas fa-check tik_chihno"></i> <p>{{ $about->p2 }}</p>
                        </div>

                        <div class="item">
                            <i class="fas fa-check tik_chihno"></i> <p>{{ $about->p3 }}</p>
                        </div>

                        <div class="item padding-bottom">
                            <i class="fas fa-check tik_chihno"></i> <p>{{ $about->p4 }}</p>
                        </div>
                    </div>

                    <div class="experience">
                        <h1>20</h1>
                        <h4>Years</h4>
                        <h5>Of experience</h5>
                    </div>
                </div>
            </div>

            <div class="about-right">
                
                <div class="a-pic">
                    <img src="{{ asset('frontend') }}/images/about/{{ $about->image }}" alt="about">
                </div>

                <div class="shape">
                    <div class="item oned">
                        <h2>9k+</h2>
                        <p>Volunteer</p>
                    </div>

                    <div class="item two">
                        <h2>228+</h2>
                        <p>Sponsers</p>
                    </div>

                    <div class="item three">
                        <h2>75</h2>
                        <p>Branches</p>
                    </div>

                    <div class="item fourShape">
                        <h2>45+</h2>
                        <p>Awards</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-sort">
            <h2> Our Sort Of Details:</h2>

            <div class="sort-item">
                <div class="item1 ml">
                    <i class="fas fa-phone-alt point_icon"></i> <p>{{ $about->aboutPhoneNumber }}</p>
                </div>

                <div class="item1">
                    <i class="fas fa-envelope point_icon"></i> <p>{{ $about->aboutEmailAddress }}</p>
                </div>

                <div class="item1">
                    <i class="fas fa-map-marker-alt point_icon"></i> <p>{{ $about->aboutLocation }}</p>
                </div>
            </div>

            <!-- <div class="link-item">
                <div class="link">
                    <i class="fas fa-check"></i> <p>Provide Facillity To Our Children.</p>
                </div>

                <div class="link">
                    <i class="fas fa-check"></i> <p>We Create Some Event For Our Children For Their Refreshment.</p>
                </div>

                <div class="link">
                    <i class="fas fa-check"></i> <p>We Collect For Our Orphanage.</p>
                </div>
            </div> -->
        </div>
    </div>
</section>


@endsection
<!-- main content ends here -->



@section('script')


@endsection