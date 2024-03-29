@extends('backend.master.mastering')
@section('content')

<!-- Achievement Table -->
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">Volunteer Requests</h4>
            </div>
            <div class="box-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php $sl = 1; ?>

                        @foreach($datas as $data)
                        <tr>
                            <td>{{ $sl }}</td>
                            <td>{{ $data->name }}</td>
                            <td><img style="height:2.5rem;" src="{{ asset('frontend/images/volunteer') }}/{{ $data->image }}" alt="{{ $data->name }}"></td>
                            <td>
                                <a href="{{ Route('volunteerDetails',$data->id) }}" class="button button-outline button-primary"><span>
                                    <i class="fa-solid fa-ellipsis"></i>
                                </span></a>
                            </td>
                            @if($data->status == 'n')
                            <td>
                                <a href="{{ Route('acceptVolunteer',$data->id) }}" class="sweetalert sweetalert-success button button-success button-outline"><span>
                                    <i class="fa-solid fa-check"></i>
                                </span></a>
                            </td>
                            <td>
                                <a href="{{ Route('deleteVolunteer',$data->id) }}" class="sweetalert sweetalert-success button button-outline button-danger"><span>
                                    <i class="fa-solid fa-xmark"></i>
                                </span></a>
                            </td>
                            @endif
                        </tr>
                        <?php $sl++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection