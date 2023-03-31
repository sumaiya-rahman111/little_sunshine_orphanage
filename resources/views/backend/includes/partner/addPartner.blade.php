@extends('backend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/orphan.css">

@endsection



@section('content')
<!-- content area starts -->

<div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Add Partner</h3>
                    </div>
                </div><!-- Page Heading End -->

            <div class="row">
                <!--Form State Start-->
                <div class="col-12 mb-6 col-auto">
                    <div class="box">
                        <div class="box-body pb-20">
                            
                                <!-- form starts here -->
                                <form action="{{ Route('partbackstore') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mbn-15">
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="name">Name:</label>
                                            <input name="name" type="text" class="form-control info" placeholder="Enter Your Name Here..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="desc">Email:</label>
                                            <input name="email" type="text" class="form-control info" placeholder="Enter Your Email Here..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p2">Company:</label>
                                            <input name="company" type="text" class="form-control info" placeholder="Enter number...">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p2">Trade Liscense Number:</label>
                                            <input name="tlNumber" type="text" class="form-control info" placeholder="Enter number...">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p2">Bank Name:</label>
                                            <input name="bank" type="text" class="form-control info" placeholder="Enter number..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p2">Branch Name:</label>
                                            <input name="branch" type="text" class="form-control info" placeholder="Enter number...">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p2">Area Code:</label>
                                            <input name="area" type="text" class="form-control info" placeholder="Enter number..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p2">Account Number:</label>
                                            <input name="account" type="text" class="form-control info" placeholder="Enter number..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p3">Phone Number:</label>
                                            <input name="phone" type="text" class="form-control info" placeholder="Enter your phone Number..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="address">Address:</label>
                                            <input name="address" type="text" class="form-control info" placeholder="Enter Address..." required>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-lg-12 col-md-auto but_orphan">
                                        <button type="submit" class="sweetatert sweetalert-success button_specific mt-40 button button-outline button-success">Submit</button>
                                    </div>
                                    
                                </form>
                                <!-- form ends here -->
                        </div>
                    </div>
                </div>
            </div>
                <!--Form State End-->

<!-- content area ends -->
@endsection



@section('script')


@endsection