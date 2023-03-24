@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/adoption-2.css">

@endsection





<!-- main content starts here -->
@section('content')


<section id="myAdoption">
    <div class="container">
        <div style="margin-top:8rem;" class="row">
            <!--Light Start-->
            <div class="col-lg-12 col-12 mb-30">
                <div class="">
                    <div class="box-head">
                        <h4 class="title mb-3">My Adoption Requests</h4>
                        <a href="{{ Route('showAdpt') }}" class="buttn btn_rounded">Add New Adoption Request</a>
                    </div>
                    <div class="box-body mt-4">
                        @if(!$datas)
                            <h2>No Data to Show</h2>
                        @else
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Orphan Image</th>
                                        <th>Orphan Name</th>
                                        <th>Adopter Name</th>
                                        <th>Action</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl = 1; ?>
                                    @foreach($datas as $data)
                                        @foreach($orphanData as $odata)
                                            @if($data->orphanId == $odata->id)
                                                <tr>
                                                    <td>{{ $sl }}</td>
                                                    <td><img style="height:2.5rem;" src="{{ asset('backend/imageStore/orphans') }}/{{ $odata->picture }}" alt="{{ $odata->id }}"></td>
                                                    <td>{{ $odata->name }}</td>
                                                    <td>{{ $data->adopterName }}</td>
                                                    <td>
                                                        <a href="{{ Route('adoptionDetails',$data->id) }}" class="buttn btn_rounded mt-2"><span>
                                                            <i class="fa-solid fa-ellipsis"></i>
                                                        </span></a>
                                                    </td>
                                                    <td>{{ $data->adoptionStatus }}</td>
                                                </tr>
                                                <?php $sl++; ?>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  
  @endsection
<!-- main content ends here -->



@section('script')


@endsection