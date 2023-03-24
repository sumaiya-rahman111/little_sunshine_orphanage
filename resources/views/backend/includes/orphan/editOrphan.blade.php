@extends('backend.master.mastering')


@section('content')


<!-- content area starts -->

<div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Add Orphan <span>( input original and authenticated information as much as possible! )</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            <div class="row">
                <!--Form State Start-->
                <div class="col-12 mb-6 col-auto">
                    <div class="box">
                        <div class="box-body pb-20">
                            
                                <!-- form starts here -->
                                <form action="{{ Route('updateOrphan',$datas->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mbn-15">
                                        <div class="form-group col-lg-12 mt-20">
                                            <label for="name">Enter Picture: (not more than 1.5 megabytes)</label>
                                            <img class="image mb-4" src="{{ asset('backend') }}/imageStore/orphans/{{ $datas->picture }}" alt="{{$datas->name}}"/>
                                            <input name="picture" type="file" class="form-control info mb-4">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label for="name">Enter orphan Name:</label>
                                            <input name="name" type="text" class="form-control info" placeholder="write down the full name..." value="{{ $datas->name }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label for="name">Enter Father's Name:(if known)</label>
                                            <input name="fathers_name" type="text" class="form-control dark" placeholder="write down Father's Name" value="{{ $datas->fathers_name }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label for="name">Enter Mother's Name:(if known)</label>
                                            <input name="mothers_name" type="text" class="form-control dark" placeholder="write down Mother's Name" value="{{ $datas->mothers_name }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="name">Enter Birth Date: (if known)</label>
                                            <input name="birthdate" type="date" class="form-control dark" placeholder="Select the date of Birth.." value="{{ $datas->birth_date }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="name">Birth Place: (if known)</label>
                                            <input name="birth_place" type="text" class="form-control dark" placeholder="Select the place of Birth.." value="{{ $datas->birth_place }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="birth_certificate">Birth Certificate Number (if available):</label>
                                            <input name="birth_certificate" type="text" class="form-control dark" placeholder="Enter the birth certificate number..." value="{{ $datas->birth_certificate }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="name">Birth mark: (if Any)</label>
                                            <input name="birth_mark" type="text" class="form-control dark" placeholder="Enter if there is any birth mark.." value="{{ $datas->birth_mark }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="name">Skin color: (Describe to the closest as possible)</label>
                                            <input name="skin_color" type="text" class="form-control dark" placeholder="Enter the skin color.." value="{{ $datas->skin_color }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="name">Eye color: (Describe to the closest as possible)</label>
                                            <input name="eye_color" type="text" class="form-control dark" placeholder="Enter the eye color.." value="{{ $datas->eye_color }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="disabilities">Describe Disabilities (if any):</label>
                                            <input name="disabilities" type="text" class="form-control dark" placeholder="Describe if the child got any disapilities..." value="{{ $datas->disabilities }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="found_place">Found Place (if available):</label>
                                            <input name="found_place" type="text" class="form-control dark" placeholder="Enter the found place name..." value="{{ $datas->found_place }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                            <label for="religion">Religion (if known):</label>
                                            <input name="religion" type="text" class="form-control dark" placeholder="Enter childs religion..." value="{{ $datas->religion }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 mt-20">
                                        <label for="service_status">Gender: </label>
                                        <select name="gender" class="form-control info" required>
                                                <option value="">-- Select Status --</option>
                                                <option value="1" @if($datas->gender == 1)selected @endif>Male</option>
                                                <option value="2" @if($datas->gender == 2)selected @endif>Female</option>
                                                <option value="3" @if($datas->gender == 3)selected @endif>Its Complicated</option>
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