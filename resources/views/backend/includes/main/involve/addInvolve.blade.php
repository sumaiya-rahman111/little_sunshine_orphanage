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
                        <h3>Add Involve Card</h3>
                    </div>
                </div><!-- Page Heading End -->

            <div class="row">
                <!--Form State Start-->
                <div class="col-12 mb-6 col-auto">
                    <div class="box">
                        <div class="box-body pb-20">
                            
                                <!-- form starts here -->
                                <form action="{{ route('insertInvolve') }}" method="post">
                                    @csrf
                                    <div class="row mbn-15">
                                        <div class="form-group col-lg-12 col-md-12 mt-4">
                                            <label for="heading">Headline:</label>
                                            <input name="heading" type="text" class="form-control info" placeholder="A headline..." required>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 mt-4">
                                            <label for="desc">Description</label>
                                            <input name="desc" type="text" class="form-control info" placeholder="Enter a short description..." required>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 mt-4">
                                            <label for="button">Button</label>
                                            <input name="button" type="text" class="form-control info" placeholder="what will be the button name?" required>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 mt-4">
                                            <label for="action">Action</label>
                                            <select name="action" class="form-control info">
                                                <option value="volunteer">Volunteer</option>
                                                <option value="partner">Partner</option>
                                                <option value="sponsor">Sponsor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-auto but_orphan">
                                        <button type="submit" class="sweetalert sweetalert-success button_specific mt-40 button button-outline button-success">Submit</button>
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