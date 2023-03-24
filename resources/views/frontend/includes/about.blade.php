@if($aboutData)    
    
    
    <!-- ================= About Section Start ====================== -->
    <section id="about">
        <div class="container">
            <div class="about-detail">
                <div class="about-left">
                    <div class="image">
                        <img src="{{ asset('frontend') }}/images/about/{{ $aboutData->image }}" alt="about">
                    </div>
                    <div class="shape">
                        <div class="item">
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

                        <div class="item">
                            <h2>45+</h2>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>

                <div class="about-right">
                    <div class="txt">
                        <h3>About Us</h3>
                        <h2>{{ $aboutData->heading }}</h2>
                        <p>{{ $aboutData->desc }}</p>

                        <div class="list-experience">
                            <div class="list">
                                <div class="item">
                                    <i class="fas fa-check"></i> <p>{{ $aboutData->p1 }}</p>
                                </div>

                                <div class="item">
                                    <i class="fas fa-check"></i> <p>{{ $aboutData->p2 }}</p>
                                </div>

                                <div class="item">
                                    <i class="fas fa-check"></i> <p>{{ $aboutData->p3 }}</p>
                                </div>

                                <div class="item padding-bottom">
                                    <i class="fas fa-check"></i> <p>{{ $aboutData->p4 }}</p>
                                </div>
                            </div>

                            <div class="experience">
                                <h1>28</h1>
                                <h4>Years</h4>
                                <h5>Of experience</h5>
                            </div>
                        </div>

                        <a href="{{ route('showAbout') }}" target="_blank" class="buttn btn_rounded">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================== About Section End ======================= -->
    @endif