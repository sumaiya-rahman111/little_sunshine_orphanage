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
                            <th>Adopter Id</th>
                            <th>Adopter Name</th>
                            <th>Adopter Nid</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                            @if($data->adopterId != 0)
                            @if($data->adoptionStatus == "Approved")
                                <tr>
                                    <th>{{ $data->adopterId }}</th>
                                    <td>{{ $data->adopterName }}</td>
                                    <td>{{ $data->adopterNid }}</td>
                                    <td>
                                        <a href="{{ Route('adopterListDetails',$data->id) }}" class="button button-outline button-primary"><span>
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </span></a>
                                    </td>
                                </tr>
                                @endif
                            @endif
                        @endforeach
                        @foreach($xero as $zero)
                            @if($zero->adoptionStatus == "Approved")
                                <tr>
                                    <th>{{ $zero->adopterId }}</th>
                                    <td>{{ $zero->adopterName }}</td>
                                    <td>{{ $zero->adopterNid }}</td>
                                    <td>
                                        <a href="{{ Route('adopterListDetails',$zero->id) }}" class="button button-outline button-primary"><span>
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </span></a>
                                    </td>
                                </tr>
                                @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection