@extends('backend.master.mastering')

@section('link')

    <!-- <link rel="stylesheet" href="{{ asset('frontend') }}/css/orphan.css"> -->

@endsection



@section('content')
<!-- content area starts -->

<div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Add Events</h3>
                    </div>
                </div><!-- Page Heading End -->

            <div class="row">
                <!--Form State Start-->
                <div class="col-12 mb-6 col-auto">
                    <div class="box">
                        <div class="box-body pb-20">
                            
                                <!-- form starts here -->
                                <form action="{{ Route('updateEvents',$datas->id) }}" method="post" enctype = "multipart/form-data">
                                    @csrf
                                    <div class="row mbn-15">
                                        <div class="form-group col-12 mt-4">
                                            <label for="image">Image:</label>
                                            <img src="{{ asset('frontend/images/events') }}/{{ $datas->image }}" alt="{{ $datas->id }}">
                                            <input name="image" type="file" class="form-control info mt-3">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="event_date">Event Date:</label>
                                            <input name="event_date" type="date" class="form-control info" placeholder="Enter The Event Date..." value="{{ $datas->event_date }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="heading">Heading:</label>
                                            <input name="heading" type="text" class="form-control info" placeholder="A heading..." value="{{ $datas->heading }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="from_time">Start at (time):</label>
                                            <input name="from_time" type="text" class="form-control info" placeholder="Enter the event starting date..." value="{{ $datas->from_time }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="to_time">End at (time):</label>
                                            <input name="to_time" type="text" class="form-control info" placeholder="Enter the event expiring date..." value="{{ $datas->to_time }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="location">Location:</label>
                                            <input name="location" type="text" class="form-control info" placeholder="Your Location?" value="{{ $datas->location }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="short_description">Short Description:</label>
                                            <input name="short_description" type="text" class="form-control info" placeholder="Enter the short_description..." value="{{ $datas->short_description }}">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="full_description">full Description</label>
                                            <input name="full_description" type="text" class="form-control info" placeholder="Enter the full description" value="{{ $datas->full_description }}">
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
                <!--Form State End-6

<!-- content area ends -->
@endsection



@section('script')


@endsection