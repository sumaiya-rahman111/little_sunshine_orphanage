@extends('backend.master.mastering')


@section('content')


<!-- content area starts -->

<div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Adoption Form <span>( input original and authenticated information as much as possible! )</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            <div class="row">
                <!--Form State Start-->
                <div class="col-12 mb-6 col-auto">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Child Information</h3>
                        </div>
                        <div class="box-body pb-5">
                            
                                <!-- form starts here -->
                                <form action="" method="post">
                                    @csrf
                                    <div class="row mbn-15">
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label for="orphan_id">Enter Orphan id:</label>
                                            <input type="number" class="form-control info" placeholder="Enter Orphan Id..." required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label for="orphan_name">Enter orphan Name:</label>
                                            <input type="text" class="form-control info" placeholder="write down the full name..." required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label for="orphan_fathersName">Enter Father's Name:(if known)</label>
                                            <input type="text" class="form-control dark" placeholder="write down Father's Name">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="orphan_mothersName">Enter Mother's Name:(if known)</label>
                                            <input type="text" class="form-control dark" placeholder="write down Mother's Name">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="orphan_birthDate">Enter Birth Date: (if known)</label>
                                            <input type="date" class="form-control dark" placeholder="Select the date of Birth..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="orphan_birthMark">Birth mark: (if Any)</label>
                                            <input type="text" class="form-control dark" placeholder="Enter if there is any birth mark..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="orphan_birthCertificate">Birth Registration Number: (if available)</label>
                                            <input type="text" class="form-control dark" placeholder="Enter birth Registration number..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="orphan_disabilities">Diabilities: (if available)</label>
                                            <input name="orphan_disabilities" type="text" class="form-control dark" placeholder="Enter disabilities..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="name">Enter Picture: (not more than 1.5 megabytes)</label>
                                            <input type="file" class="form-control info">
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-6 col-auto">
                    <div class="box">
                        <div class="box-head mt-3">
                            <h3 class="title">Adopter Information</h3>
                        </div>
                        <div class="box-body pb-20">
                            
                                <!-- form starts here -->
                                <form action="" method="post">
                                    @csrf
                                    <div class="row mbn-15">

                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="adopter_formNumber">Form Number: </label>
                                            <input name="adopter_name" type="text" class="form-control info" placeholder="write down the form number..." required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="adopter_name">Enter Adopter Name:</label>
                                            <input name="adopter_name" type="text" class="form-control info" placeholder="write down the full name..." required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="adopter_spouseName">Enter Spouse's Name: (if available) </label>
                                            <input name="adopter_spouseName" type="text" class="form-control dark" placeholder="write down Spouse's Name...">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="adopter_nid">NID: </label>
                                            <input type="string" class="form-control info" placeholder="National Identity Number.." required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="perm_address">Permanent Address: </label>
                                            <input type="text" class="form-control info" placeholder="Enter permanant Address.." required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="address">Present Address:</label>
                                            <input type="text" class="form-control info" placeholder="Enter present Address.." required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="adopter_email">Email: (if Any)</label>
                                            <input type="text" class="form-control dark" placeholder="Enter email address..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="adopter_contactNumber">Contact Number: </label>
                                            <input type="text" class="form-control info" placeholder="Enter a reachable contact number.." required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="adopter_altContactNumber">Alternative Contact Number: (if available) </label>
                                            <input type="text" class="form-control dark" placeholder="Enter Alternative Contact Number..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="name">Enter Picture: (not more than 1.5 megabytes)</label>
                                            <input type="file" class="form-control info" required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="adopter_gender">Gender: </label>
                                            <select name="adopter_gender" class="form-control info" required>
                                                <option value="">-- Select Gender --</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Trans Gender</option>
                                                <option value="4">Rather Not Say</option>
                                            </select>
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