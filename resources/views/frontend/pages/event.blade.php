@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/event.css">

@endsection



@section('content')

    <section id="event">
        <div class="container">
            <div class="e-body">
                <div class="heading">
                    <h3>Our Upcoming Events</h3>
                </div>

                <div class="event-item">
                    @foreach($datas as $data)
                    <div class="item">
                        <div class="left">
                            <div class="title">
                                <h3>{{ $data->heading }}</h3>
                            </div>

                            <div class="description">
                                <p>{{ $data->full_description }}</p>
                                <div class="t-item">
                                    <i class="fas fa-calendar"></i>
                                    <h6>{{ $data->event_date }}</h6>
                                </div>

                                <div class="t-item">
                                    <i class="fas fa-clock"></i>
                                    <h6>{{ $data->from_time }} - {{ $data->to_time }}</h6>
                                </div>

                                <div class="t-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h6>{{ $data->location }}</h6>
                                </div>
                            </div>
                        </div>

                        <div class="right">
                            <img src="{{ asset('frontend/images/events') }}/{{ $data->image }}" alt="event-1">
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

@endsection



@section('script')


@endsection