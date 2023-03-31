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
                        <h3>Add Volunteer</h3>
                    </div>
                </div><!-- Page Heading End -->

            <div class="row">
                <!--Form State Start-->
                <div class="col-12 mb-6 col-auto">
                    <div class="box">
                        <div class="box-body pb-20">
                            
                                <!-- form starts here -->
                                <form action="{{ Route('vbackregistration') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mbn-15">
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="image">Image:</label>
                                            <input name="image" type="file" class="form-control info" required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="heading">Name:</label>
                                            <input name="name" type="text" class="form-control info" placeholder="Enter Your Name Here..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="desc">Email:</label>
                                            <input name="email" type="text" class="form-control info" placeholder="Enter Your Email Here..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p1">Identype:</label>
                                            <select class="form-control info" name="identype">
                                                <option selected value="n">NID</option>
                                                <option value="b">Birth Certificate</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p2">Identity:</label>
                                            <input name="identity" type="text" class="form-control info" placeholder="Enter number..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p3">Phone Number:</label>
                                            <input name="phone" type="text" class="form-control info" placeholder="Enter your phone Number..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="address">Address:</label>
                                            <input name="address" type="text" class="form-control info" placeholder="Enter Address..." required>
                                        </div>
                                        <label for="address" class="mt-5">Volunteer Skill Area:</label>
                                        <div class="form-group col-lg-12 col-md-12 mb-4 adomx-checkbox-radio-group inline">
                                            <label for="op1" class="adomx-checkbox-2 success">
                                                <input id="op1" name="op1" type="checkbox"> <i class="icon"></i>
                                                Hospitals
                                            </label>
                                            <label for="op2" class="adomx-checkbox-2 success">
                                                <input id="op2" name="op2" type="checkbox"> <i class="icon"></i>
                                                Orphanages
                                            </label>
                                            <label for="op3" class="adomx-checkbox-2 success">
                                                <input id="op3" name="op3" type="checkbox"> <i class="icon"></i>
                                                Schools
                                            </label>
                                            <label for="op4" class="adomx-checkbox-2 success">
                                                <input  id="op4" name="op4" type="checkbox"> <i class="icon"></i>
                                                Community services
                                            </label>
                                            <label for="op5" class="adomx-checkbox-2 success">
                                                <input id="op5" name="op5" type="checkbox"> <i class="icon"></i>
                                                Arts and Entertainment
                                            </label>
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