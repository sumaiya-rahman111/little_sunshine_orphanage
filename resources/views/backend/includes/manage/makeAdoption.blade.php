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
                        <h3>Adoption</h3>
                    </div>
                </div><!-- Page Heading End -->

            <div class="row">
                <!--Form State Start-->
                <div class="col-12 mb-6 col-auto">
                    <div class="box">
                        <div class="box-body pb-20">
                            
                                <!-- form starts here -->
                                <form action="{{ route('makeBackAdoption') }}" method="post" enctype = "multipart/form-data">
                                    @csrf
                                    <div class="row mbn-15">
                                        <div class="form-group col-12">
                                            <label for="orphan_id">Enter Orphan id:</label>
                                            <select class="form-control info" name="orphanId" required>
                                                <?php $count = 0; ?>
                                                @foreach($datas as $data)
                                                    @foreach($orphanData as $odata)
                                                        @if($data->id == $odata->orphanId)
                                                            <?php $count++; ?>
                                                        @endif
                                                    @endforeach
                                                    @if($count == 0)
                                                        <option class="form-control" value="{{ $data->id }}">{{ $data->id }}</option>
                                                    @endif
                                                    <?php $count = 0; ?>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="adopterName">Adopter Name:</label>
                                            <input name="adopterName" type="text" class="form-control info" placeholder="Adopter Name..." required>
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="adopterEmail">Adopter Email:</label>
                                            <input name="adopterEmail" type="text" class="form-control info" placeholder="Adopter Email...">
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="formNumber">Form Number:</label>
                                            <input name="formNumber" type="text" class="form-control info" placeholder="Form Number..." required>
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="spouseName">Spouse Name:</label>
                                            <input name="spouseName" type="text" class="form-control info" placeholder="Spouse Name...">
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="adopterAltMobile">Alternative Phone Number:</label>
                                            <input name="adopterAltMobile" type="text" class="form-control info" placeholder="Alternative phone number...">
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="adopterMobile">Adopter Phone Number:</label>
                                            <input name="adopterMobile" type="text" class="form-control info" placeholder="Adopter phone number...">
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="adopterBan">Bank Account Number:</label>
                                            <input name="adopterBan" type="text" class="form-control info" placeholder="Bank Account Number...">
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="adopterNid">NID:</label>
                                            <input name="adopterNid" type="text" class="form-control info" placeholder="Bank Account Number...">
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="adopterPa">Present Address:</label>
                                            <input name="adopterPa" type="text" class="form-control info" placeholder="Present Address...">
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="adopterPeradd">Permanent Address:</label>
                                            <input name="adopterPeradd" type="text" class="form-control info" placeholder="Permanent Address...">
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="adopterReason">Adopting Reason:</label>
                                            <input name="adopterReason" type="text" class="form-control info" placeholder="Reason of Adoption...">
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="adopterDob">Date of Birth:</label>
                                            <input name="adopterDob" type="date" class="form-control info">
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="adopterGender">Alternative Gender:</label>
                                            <select class="form-control info" name="adopterGender" required>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="Its Complicated">Its Complicated</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 mt-4">
                                            <label for="image">Image:</label>
                                            <input name="image" type="file" class="form-control info" required>
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