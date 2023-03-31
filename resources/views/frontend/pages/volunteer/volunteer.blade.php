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
    
                    <form action="{{ route('vregistration') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h6>Name:</h6>
                        <div class="input-box">
                            <input name="name" class="form-control" type="text" placeholder="Enter Full Name here..">
                        </div>
    
    
                        <h6>Email:</h6>
                        <div class="input-box">
                            <input name="email" class="form-control" type="email" placeholder="Enter Email Here..">
                        </div>
    
    
                        <h6>NID / Birth Cirtifate:</h6>
                        <div class="input-box">
                                <select name="identype" style="background:none;" class="form-control">
                                    <option value="n" selected>NID</option>
                                    <option value="b">Birth Certificate</option>
                                </select>
                                <input name="identity" type="number" class="form-control" placeholder="Enter the number">
                        </div>
    
    
                        <h6>Phone Number:</h6>
                        <div class="input-box">
                            <input name="phone" type="tel" placeholder="Enter Phone Number Here..">
                        </div>
    
    
                        <h6>Address:</h6>
                        <div class="input-box">
                            <input name="address" type="text" placeholder="Enter Address Here..">
                        </div>
    
    
                        <h6>Please indicate areas to volunteer according to your skills:</h6>
                        <div class="input-box-dropdown">
                            <input type="checkbox" id="op-1" name="op1" value="Hospitals">
                            <label for="op-1">Hospitals</label>
                            <br>
    
                            <input type="checkbox" id="op-2" name="op2" value="Orphanages">
                            <label for="op-2">Orphanages</label>
                            <br>
    
                            <input type="checkbox" id="op-3" name="op3" value="Schools">
                            <label for="op-3">Schools</label>
                            <br>
    
                            <input type="checkbox" id="op-4" name="op4" value="Community services">
                            <label for="op-4">Community services</label>
                            <br>
                            <input type="checkbox" id="op-5" name="op5" value="Arts and Entertainment">
                            <label for="op-5">Arts and Entertainment</label>
                            <br>
                        </div>


                        <label for="image"><h6 class="mt-3">Picture:</h6></label>
                        <div class="input-box">
                            <input name="image" type="file" class="form-control">
                        </div>
    
    
                        <div class="submit-btn">
                            <button class="buttn btn_rounded">Submit</button>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection








@section('script')


@endsection