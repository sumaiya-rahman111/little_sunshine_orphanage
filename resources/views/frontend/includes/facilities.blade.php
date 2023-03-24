    <!-- ================== Facilities Section Start ===================== -->
    <section id="facilities">
        <div class="container">
            <div class="faci-heading">
                <h3>Facilities</h3>
                <h2>How Do We Care About Our Children</h2>
            </div>

            <div class="faci-card">
                    @foreach($facData as $data)
                    <div data-aos="flip-left" class="item">
                        <img src="{{ asset('frontend/images/facilities') }}/{{ $data->image }}" alt="health">
                        <div class="shape">
                            <p>{{ $data->heading }}</p>
                        </div>
                    </div>
                    @endforeach

                    <div data-aos="flip-left" class="item">
                        <div class="extra">
                            <a href="{{ route('showFac') }}">
                                <p>Watch Details Facilities <i class="fas fa-arrow-right"></i></p>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- ================== Facilities Section End ======================= -->