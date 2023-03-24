@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/volunteer.css">

@endsection



@section('content')

    <section id="v-registration">
        <div class="container">
            <div class="cont">
                <div class="v-body">
                    <div class="heading">
                        <h3>Volunteer Registration Form</h3>
                    </div>
    
                    <form action="#">
                        <h6>Name:</h6>
                        <div class="input-box">
                            <input class="form-control" type="text" placeholder="First Name..">
                            <input class="form-control" type="text" placeholder="Last Name..">
                        </div>
    
    
                        <h6>Email:</h6>
                        <div class="input-box">
                            <input class="form-control" type="email" placeholder="Enter Email Here..">
                        </div>
    
    
                        <h6>Birth Date:</h6>
                        <div class="input-box">
                            <div class="dropdown">
                                <input type="date" class="form-control">
                            </div>
                        </div>
    
    
                        <h6>Phone Number:</h6>
                        <div class="input-box">
                            <input type="number" placeholder="Enter Phone Number Here..">
                        </div>
    
    
                        <h6>Address:</h6>
                        <div class="input-box">
                            <input type="text" placeholder="Enter Address Here..">
                        </div>
    
    
                        <h6>Please indicate areas to volunteer according to your skills:</h6>
                        <div class="input-box-dropdown">
                            <input type="checkbox" id="op-1" name="op-1" value="Hospitals">
                            <label for="op-1">Hospitals</label>
                            <br>
    
                            <input type="checkbox" id="op-2" name="op-2" value="Orphanages">
                            <label for="op-2">Orphanages</label>
                            <br>
    
                            <input type="checkbox" id="op-3" name="op-3" value="Schools">
                            <label for="op-3">Schools</label>
                            <br>
    
                            <input type="checkbox" id="op-4" name="op-4" value="Community services">
                            <label for="op-4">Community services</label>
                            <br>
                            <input type="checkbox" id="op-5" name="op-5" value="Arts and Entertainment">
                            <label for="op-5">Arts and Entertainment</label>
                            <br>
                        </div>
    
    
                        <div class="submit-btn">
                            <a href="#" class="buttn btn_rounded">Submit</a>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection








@section('script')


@endsection