@extends('backend.master.mastering')
@section('content')

<!-- Achievement Table -->
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">Adoption Requests</h4>
            </div>
            <div class="box-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Orphan Id</th>
                            <th>Adopter Name</th>
                            <th>Adopter Nid</th>
                            <th>Adopting Reason</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <th>{{ $data->orphanId }}</th>
                                <td>{{ $data->adopterName }}</td>
                                <td>{{ $data->adopterNid }}</td>
                                <td>{{ $data->adopterReason }}</td>
                                <td>
                                    <a href="#" class="button button-outline button-primary"><span>
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </span></a>
                                </td>
                                <td>
                                    <a href="#" class="sweetalert sweetalert-success button button-success button-outline"><span>
                                        <i class="fa-solid fa-check"></i>
                                    </span></a>
                                </td>
                                <td>
                                    <a href="#" class="sweetalert sweetalert-success button button-outline button-danger"><span>
                                        <i class="fa-solid fa-xmark"></i>
                                    </span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection