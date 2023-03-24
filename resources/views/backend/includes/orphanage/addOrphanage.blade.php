@extends('backend.master.mastering')


@section('content')


<!-- content area starts -->

<div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Add Orphanage <span>( input original and authenticated information as much as possible! )</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            <div class="row">
                <!--Form State Start-->
                <div class="col-12 mb-6 col-auto">
                    <div class="box">
                        <div class="box-body pb-20">
                            
                                <!-- form starts here -->
                                <form action="{{ route('insertOrphanage') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mbn-15">
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="name">Orphanage Name:</label>
                                            <input name="name" type="text" class="form-control info" placeholder="write down the full name..." required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="short_desc">Short Description:</label>
                                            <input name="short_desc" type="text" class="form-control info" placeholder="Say something about the organization in short...." required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="desc">Full Description:</label>
                                            <input name="desc" type="text" class="form-control info" placeholder="Say something about the organization in short...." required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="location">Location:</label>
                                            <input name="location" type="text" class="form-control info" placeholder="Enter Location..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="email">Email:</label>
                                            <input name="email" type="text" class="form-control info" placeholder="Orphanage Email..">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="photo">Enter Picture: (not more than 1.5 megabytes)</label>
                                            <input name="photo" type="file" class="form-control info" required>
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