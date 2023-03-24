@extends('backend.master.mastering')


@section('content')


<!-- content area starts -->

<div class="row justify-content-between align-items-center mb-10">

<!-- Page Heading Start -->
<div class="col-12 col-lg-auto mb-20">
    <div class="page-heading">
        <h3>Add Contributor<span>( input original and authenticated information as much as possible! )</span></h3>
    </div>
</div><!-- Page Heading End -->

<div class="row">
<!--Form State Start-->
<div class="col-12 mb-6 col-auto">
    <div class="box">
        <div class="box-body pb-20">
            
                <!-- form starts here -->
                <form action="" method="post">
                    @csrf
                    <div class="row mbn-15">
                        <div class="form-group col-lg-4 col-md-6">
                            <label for="contributor_name">Enter Contributor Name:</label>
                            <input type="text" class="form-control info" placeholder="write down the full name..." required>
                        </div>
                        <div class="form-group col-lg-4 col-md-6">
                            <label for="contributor_email">Enter email</label>
                            <input type="email" class="form-control dark" placeholder="example@info.com">
                        </div>
                        <div class="form-group col-lg-4 col-md-6">
                            <label for="contributor_address">Address </label>
                            <input name="perm_address" type="text" class="form-control info" placeholder="Enter address.." required>
                        </div>
                        <div class="form-group col-lg-4 col-md-6 mt-20">
                            <label for="contributor_amount">Amount </label>
                            <input name="address" type="text" class="form-control info" placeholder="Enter Amount.." required>
                        </div>
                        <div class="form-group col-lg-4 col-md-6 mt-20">
                            <label for="number">Contact Number: </label>
                            <input type="text" class="form-control info" placeholder="Enter Contact number.." required>
                        </div>
                        <div class="form-group col-lg-4 col-md-6 mt-20">
                            <label for="name">Enter Picture: (not more than 1.5 megabytes)</label>
                            <input name="picture" type="file" class="form-control info" required>
                        </div>
                        <div class="form-group col-lg-4 col-md-6 mt-20">
                            <label for="gender">Enter Gender</label>
                            <label class="adomx-radio success mb-2">
                                <input type="radio" name="gender"> 
                                <i class="icon"></i>
                                Male
                            </label>

                            <label class="adomx-radio success">
                                <input type="radio" name="gender" checked><i class="icon"></i>
                            Female
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