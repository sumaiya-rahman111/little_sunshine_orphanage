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
                        <h3>Add News...</h3>
                    </div>
                </div><!-- Page Heading End -->

            <div class="row">
                <!--Form State Start-->
                <div class="col-12 mb-6 col-auto">
                    <div class="box">
                        <div class="box-body pb-20">
                            
                                <!-- form starts here -->
                                <form action="{{ route('insertNews') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mbn-15">
                                        <div class="form-group col-lg-12 col-md-12 mt-4">
                                            <label for="heading">Heading:</label>
                                            <input name="heading" type="text" class="form-control info" placeholder="Enter Heading..." required>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 mt-4">
                                            <label for="date">Data:</label>
                                            <input name="date" type="text" class="form-control info" placeholder="Enter Date..." required>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 mt-4">
                                            <label for="location">Location:</label>
                                            <input name="location" type="text" class="form-control info" placeholder="Enter Location..." required>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 mt-4">
                                            <label for="short_description">short_description: </label>
                                            <input name="short_description" type="text" class="form-control info" placeholder="Enter a short description...">
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 mt-4">
                                            <label for="full_description">full_description: </label>
                                            <input name="full_description" type="text" class="form-control info" placeholder="Enter full description...">
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 mt-4">
                                            <label for="photo">photo: </label>
                                            <input name="photo" type="file" class="form-control info">
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



@section('script')


@endsection