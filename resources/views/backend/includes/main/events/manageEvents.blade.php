@extends('backend.master.mastering')
@section('link')
<!-- extra links here -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/orphan.css">
<!-- extra links ends here -->
@endsection
@section('content')

<!-- enter content here -->

<div class="row">
    <!--Light Start-->
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title mb-2">Manage Events</h4>
                <a href="{{ route('addEvents') }}" class="button button-outline button-success">Add New Event</a>
            </div>
            <div class="box-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Heading</th>
                            <!-- <th>full_description</th> -->
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sl = 1; ?>
                        @foreach($datas as $data)
                        <tr>
                            <td>{{ $sl }}</td>
                            <td><img style="height:2.5rem;" src="{{ asset('frontend/images/events') }}/{{ $data->image }}" alt=""></td>
                            <td>{{ $data->event_date }}</td>
                            <td>{{ $data->heading }}</td>
                            <!-- <td>{{ $data->from_time }}</td>
                            <td>{{ $data->to_time }}</td>
                            <td>{{ $data->location }}</td>
                            <td>{{ $data->short_description }}</td> -->
                            <!-- <td>{{ $data->full_description }}</td> -->
                            <td>
                                <a href="{{ Route('detailsEvents',$data->id) }}" class="button button-outline button-primary"><span>
                                    <i class="fa-solid fa-ellipsis"></i>
                                </span></a>
                            </td>
                            <td>
                                <a href="{{ Route('editEvents',$data->id) }}" class="button button-outline button-info"><span>
                                <i class="fa-solid fa-pen-nib"></i>
                                </span></a>
                            </td>
                            <td>
                                <a href="{{ route('deleteEvents',$data->id) }}" class="sweetalert sweetalert-success button button-outline button-danger"><span>
                                    <i class="fa-solid fa-trash"></i>
                                </span></a>
                            </td>
                        </tr>
                        <?php $sl++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <!--Light End-->



<!-- content ends here -->
@endsection
@section('script')
<!-- extra scripts here -->
<!-- scripts ends here -->
@endsection







