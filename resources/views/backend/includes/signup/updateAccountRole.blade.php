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
                        <h3>Update to Staff Account</h3>
                    </div>
                </div><!-- Page Heading End -->

            <div class="row">
                <!--Form State Start-->
                <div class="col-12 mb-6 col-auto">
                    <div class="box">
                        <div class="box-body pb-20">
                            
                                <!-- form starts here -->
                                <form action="{{ Route('updateToStaffAccount',$datas->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mbn-15">
                                        <div class="form-group col-lg-12 col-md-12 mt-4">
                                            <label for="role">Role</label>
                                            <select class = "form-control info" name = "role" required>
                                                <option value = "{{ $datas->role }}">Staff Account Requested</option>
                                                <option value = "6">Grade 4 Staff</option>
                                                <option value = "5">Grade 3 Staff</option>
                                                <option value = "4">Grade 2 Staff</option>
                                                <option value = "3">Grade 1 Staff</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-auto but_orphan">
                                        <button type="submit" class=" button_specific mt-40 button button-outline button-success">Submit</button>
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