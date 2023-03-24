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
                        <h3>Add Facilities</h3>
                    </div>
                </div><!-- Page Heading End -->

            <div class="row">
                <!--Form State Start-->
                <div class="col-12 mb-6 col-auto">
                    <div class="box">
                        <div class="box-body pb-20">
                            
                                <!-- form starts here -->
                                <form action="{{ Route('updateAbout',$datas->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mbn-15">
                                        <div class="form-group col-lg-12 col-md-12 mt-4">
                                            <label for="image">Image:</label>
                                            <img class="image mb-4" src="{{ asset('frontend') }}/images/about/{{ $datas->image }}" alt="{{$datas->heading}}"/>
                                            <input name="image" type="file" class="form-control info">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="heading">Headline:</label>
                                            <input name="heading" type="text" class="form-control info" placeholder="A headline..." value="{{ $datas->heading }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="desc">Description:</label>
                                            <input name="desc" type="text" class="form-control info" placeholder="Description..."   value="{{ $datas->desc }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p1">Point-1:</label>
                                            <input name="p1" type="text" class="form-control info" placeholder="Point 1..."   value="{{ $datas->p1 }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p2">Point-2:</label>
                                            <input name="p2" type="text" class="form-control info" placeholder="Point 2..."   value="{{ $datas->p2 }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p3">Point-3:</label>
                                            <input name="p3" type="text" class="form-control info" placeholder="Point 3..."   value="{{ $datas->p3 }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="p4">Point-4:</label>
                                            <input name="p4" type="text" class="form-control info" placeholder="Point 4..."   value="{{ $datas->p4 }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="aboutPhoneNumber">Phone Number:</label>
                                            <input name="aboutPhoneNumber" type="text" class="form-control info" placeholder="Phone Number"   value="{{ $datas->aboutPhoneNumber }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="aboutEmailAddress">Email Address:</label>
                                            <input name="aboutEmailAddress" type="text" class="form-control info" placeholder="Email Address"   value="{{ $datas->aboutEmailAddress }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 mt-4">
                                            <label for="aboutLocation">Office Address:</label>
                                            <input name="aboutLocation" type="text" class="form-control info" placeholder="Address..."   value="{{ $datas->aboutLocation }}">
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