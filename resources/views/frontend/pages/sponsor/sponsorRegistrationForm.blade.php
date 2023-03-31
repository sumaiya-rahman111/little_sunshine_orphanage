@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/partner.css">

@endsection



@section('content')

<section id="v-registration">
        <div class="container">
            <div class="v-body">
                <div class="heading">
                    <h3>Sponsor Registration Form</h3>
                </div>

                <form action="{{ route('insponsor') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h2>Name:</h2>
                    <div class="input-box">
                        <input class="form-control" name="name" type="text" placeholder="Full Name.." required>
                    </div>


                    <h2>Email:</h2>
                    <div class="input-box">
                        <input class="form-control" name="email" type="email" placeholder="Enter Email Here.." required>
                    </div>


                    <h2>NID:</h2>
                    <div class="input-box">
                        <input class="form-control" name="nid" type="text" placeholder="Enter NID number Here.." required>
                    </div>


                    <h2>Company Name:</h2>
                    <div class="input-box">
                        <input class="form-control" name="company" type="text" placeholder="Enter Company Name Here..">
                    </div>


                    <h2>Trade Liscense Number:</h2>
                    <div class="input-box">
                        <input class="form-control" name="tlNumber" type="text" placeholder="Enter Trade Liscense number here..">
                    </div>


                    <h2>Bank Name:</h2>
                    <div class="input-box">
                        <input class="form-control" name="bank" type="text" placeholder="Enter Bank Name Here.." required>
                    </div>


                    <h2>Branch:</h2>
                    <div class="input-box">
                        <input class="form-control" name="branch" type="text" placeholder="Enter branch Name Here..">
                    </div>


                    <h2>Area Code:</h2>
                    <div class="input-box">
                        <input class="form-control" name="area" type="text" placeholder="Enter Area Code Here.." required>
                    </div>


                    <h2>Account Number:</h2>
                    <div class="input-box">
                        <input class="form-control" name="account" type="text" placeholder="Enter Account Number Here.." required>
                    </div>
                    

                    <h2>Phone Number:</h2>
                    <div class="input-box">
                        <input class="form-control" type="tel" name="phone" placeholder="Enter Phone Number Here.." required>
                    </div>


                    <h2>Address:</h2>
                    <div class="input-box">
                        <input class="form-control" name="address" type="text" placeholder="Enter Address Here.." required>
                    </div>


                    <div>
                        <button class="buttn btn_rounded">Submit</button>
                    </div>
                
                </form>
            </div>
        </div>
    </section>

@endsection



@section('script')


@endsection