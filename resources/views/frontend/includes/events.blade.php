

<!-- ================== Event Section Start ======================= -->
    @foreach($eveData as $datas)
        @if($datas)
        <section id="event">
            <div class="container">
                <div class="event-heading">
                    <h2>Upcoming Event</h2>
                    <h3>Come to Our Event For More Info</h3>
                </div>
            @break
        @endif
    @endforeach
            <div class="event-card">
                @foreach($eveData as $data)
                <div class="item">
                    <div class="faf">
                        <div class="ev">
                            <img src="{{ asset('frontend/images/events') }}/{{ $data->image }}" alt="drawing_competetion">
                            <div class="overlay">

                                <!-- from -->
                                <div class="taf">
                                    <div class="event-detail">
                                        <div class="date-box">
                                            <h3>{{ $data->event_date }}</h3>
                                        </div>

                                        <div class="heading">
                                            <p>{{ $data->heading }}</p>
                                        </div>

                                        <div class="time-loc">
                                            <div class="time">
                                                <p><i class="far fa-clock"></i>{{ $data->from_time }} - {{ $data->to_time }}</p>
                                            </div>
                                            <div class="location">
                                                <p><i class="fas fa-map-marker-alt"></i>{{ $data->location }}</p>
                                            </div>
                                        </div>

                                        <div class="details">
                                            <p>{{ $data->short_description }}</p>
                                        </div>

                                        <div class="button">
                                            <a href="{{ route('showEve') }}" class="buttn btn_rounded">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- to -->

                            </div>
                        </div>
                    </div>

                    
                </div>
                @endforeach
        @foreach($eveData as $datas)
            @if($datas)
                </div>

                <div class="event-button">
                    <a href="{{ route('showEve') }}" class="buttn btn_rounded">View All Events</a>
                </div>
            </div>
        </section>
            @break
        @endif
    @endforeach
    <!-- ================== Event Section End ========================= -->