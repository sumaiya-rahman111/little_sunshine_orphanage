@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/update.css">

@endsection



@section('content')

<section id="update">
        <div class="container">
            <div class="up-body">
                <div class="heading">
                    <h3>Our Insights and Updates</h3>
                </div>

                <div class="up-item">
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
                                    <h4>26th March</h4>
                                </div>

                                <div class="t-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h4>Dhaka, Bangladesh</h4>
                                </div>

                                <!-- === === === === Like === === === === -->

                                <div class="like">
                                    <p>Share Reaction:</p>
                                    <div class="like_icon">
                                    <i class="fas fa-thumbs-up"></i>
                                    <i class="fas fa-thumbs-down"></i>
                                    </div>
                                </div>
                                <textarea class="form-control" name="" id="txt" cols="30" rows="4" placeholder="Comment Here.."></textarea>
                                <div class="btn">
                                    <a href="#">Submit</a>
                                </div>
                            </div>
                        </div>

                        <div class="right">
                            <img src="{{ asset('frontend/images/news') }}/{{ $data->photo }}" alt="update-1">
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