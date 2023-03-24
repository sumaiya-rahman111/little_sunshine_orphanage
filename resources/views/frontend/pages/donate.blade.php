@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/donate.css">

@endsection





<!-- main content starts here -->
@section('content')

<section id="donatepage">
        <div class="donate-body">
            <div class="container">
    
                <div class="cont">
                    <form action="#">
                        <div class="row">
                            <div class="col">

                                <h3 class="title">Payment Details</h3>
        
                                <div class="input-box">
                                    <span>Full Name:</span>
                                    <input type="text" placeholder="Enter Your Name..">
                                </div>
        
                                <div class="input-box">
                                    <span>Email:</span>
                                    <input type="email" placeholder="Enter Your Email..">
                                </div>
        
                                <div class="input-box">
                                    <span>Cards Accepted:</span>
                                    <img src="{{ asset('frontend/images/cards.png') }}" alt="cards">
                                </div>
        
                                <div class="input-box">
                                    <span>Card Holder Name:</span>
                                    <input type="text" placeholder="Enter Card Holder Name..">
                                </div>
        
                                <div class="input-box">
                                    <span>Credit Card Number:</span>
                                    <input type="number" placeholder="1112233445">
                                </div>
        
                                <div class="input-box">
                                    <span>Exp Month:</span>
                                    <input type="text" placeholder="Month">
                                </div>

                                <div class="input-box">
                                    <span>Exp Year:</span>
                                    <input type="number" placeholder="2022">
                                </div>
    
                                <div class="input-box">
                                    <span>CVV:</span>
                                    <input type="text" placeholder="1234">
                                </div>

                                <div class="input-box">
                                    <span>Donation Amount:</span>
                                    <input type="text" placeholder="1234">
                                </div>
        
                            </div>
        
                        </div>
        
                        <input type="submit" value="proceed to checkout" class="submit-btn">
        
                    </form>
                </div>
    
            </div>
        </div>
    </section>

    @endsection
<!-- main content ends here -->



@section('script')


@endsection