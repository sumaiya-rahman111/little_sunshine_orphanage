@extends('backend.master.mastering')


@section('content')


<!-- content area starts -->

<div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Add Staff <span>( input original and authenticated information as much as possible! )</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            <div class="row">
                <!--Form State Start-->
                <div class="col-12 mb-6 col-auto">
                    <div class="box">
                        <div class="box-body pb-20">
                            
                                <!-- form starts here -->
                                <form action="{{ Route('insertStaff') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mbn-15">
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label for="staff_name">Enter Staff Name:</label>
                                            <input name="staff_name" type="text" class="form-control info" placeholder="write down the full name...">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label for="post">Post</label>
                                            <input name="post" type="text" class="form-control info" placeholder="Service Post...">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label for="email">Enter email</label>
                                            <input name="email" type="email" class="form-control info" placeholder="example@info.com">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="birthDate">Enter Birth Date:</label>
                                            <input name="birthDate" type="date" class="form-control info" placeholder="Select the date of Birth..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="birth_Mark">Birth mark: (if Any)</label>
                                            <input name="birth_Mark" type="text" class="form-control dark" placeholder="Enter if there is any birth mark..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="perm_address">Permanent Address </label>
                                            <input name="perm_address" type="text" class="form-control info" placeholder="Enter Permanent address..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="address">Present Address </label>
                                            <input name="address" type="text" class="form-control info" placeholder="Enter present address..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="contact">Contact Number: </label>
                                            <input name="contact" type="text" class="form-control info" placeholder="Enter Contact number..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="alt_contact">Alt Contact Number: </label>
                                            <input name="alt_contact" type="text" class="form-control info" placeholder="Enter Alternative Contact number..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                        <label for="service_status">Service Status: </label>
                                            <select name="service_status" class="form-control info">
                                                <option value="1" selected>In Service</option>
                                                <option value="0">Not In Service</option>
                                                <option value="2">Suspended</option>
                                                <option value="3">Dismissed</option>
                                                <option value="4">Retired</option>
                                                <option value="5">In Leave</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="joining_date">Enter Joining Date:</label>
                                            <input name="joining_date" type="date" class="form-control info" placeholder="Select the date of Joining..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="NID">NID Number: </label>
                                            <input name="NID" type="text" class="form-control info" placeholder="Enter NID Number..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="passport">Passport Number: ( if available )</label>
                                            <input name="passport" type="text" class="form-control dark" placeholder="Enter Passport Number..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="resume">Resume: (not more than 1.5 megabytes)</label>
                                            <input name="resume" type="file" class="form-control info">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="photo">Enter Picture: (not more than 1.5 megabytes)</label>
                                            <input name="photo" type="file" class="form-control info">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="gender">Enter Gender</label>
                                            <select name="gender" class="form-control info">
                                                <option value="1" selected>Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Its Complicated</option>
                                            </select>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-auto but_orphan">
                                        <button type="submit" class="button_specific mt-40 button button-outline button-success">Submit</button>
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