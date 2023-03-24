@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/partner.css">

@endsection



@section('content')

<section id="v-registration">
        <div class="container">
            <div class="v-body">
                <div class="heading">
                    <h3>Partnership Registration Form</h3>
                </div>

                <form action="#">
                    <h2>Name:</h2>
                    <div class="input-box">
                        <input type="text" placeholder="First Name..">
                        <input type="text" placeholder="Last Name..">
                    </div>


                    <h2>Email:</h2>
                    <div class="input-box">
                        <input type="email" placeholder="Enter Email Here..">
                    </div>


                    <h2>Company Name:</h2>
                    <div class="input-box">
                        <input type="text" placeholder="Enter Company Name Here..">
                    </div>
                    

                    <h2>Phone Number:</h2>
                    <div class="input-box">
                        <input type="number" placeholder="Enter Phone Number Here..">
                    </div>


                    <h2>Address:</h2>
                    <div class="input-box">
                        <input type="text" placeholder="Enter Address Here..">
                    </div>


                    <div class="submit-btn">
                        <a href="#">Submit</a>
                    </div>
                
                </form>
            </div>
        </div>
    </section>

@endsection



@section('script')


@endsection