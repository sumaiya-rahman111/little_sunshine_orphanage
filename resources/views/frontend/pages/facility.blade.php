@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/facility.css">

@endsection



@section('content')

<section id="faci-body">
        <div class="container">
            <div class="head">
                <h2>OUR FACILITIES</h2>
                <h3>That We Provide</h3>
            </div>
            
            <div class="faci-item">
                @foreach($datas as $data)
                <div id="margin_bottom" class="item">
                    <div class="left">
                        <div class="title">
                            <h3>{{ $data->heading }}</h3>
                        </div>
                        <div class="description">
                            <p>{{ $data->desc }}</p>
                        </div>
                    </div>

                    <div class="right">
                        <img src="{{ asset('frontend/images/facilities') }}/{{ $data->image }}" alt="h-checkup">
                    </div>
                </div>
                @endforeach

            
            </div>

        </div>
    </section>

@endsection



@section('script')


@endsection