@extends('backend.master.mastering')


@section('content')


<div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Adopted Babies List</h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered data-table data-table-export">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Orphan Id</th>
                                        <th>Orphan Name</th>
                                        <th>Adopter Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl = 1; ?>
                                    @foreach($datas as $data)
                                    <tr>
                                        <td>{{ $sl }}</td>
                                        <td>{{ $data->orphanId }}</td>
                                        @foreach($orphanData as $oData)
                                        @if($data->orphanId == $oData->id)
                                        <td>{{ $oData->name }}</td>
                                        @endif
                                        @endforeach
                                        <td>{{ $data->adopterName }}</td>
                                        <td>
                                            <a href="{{ Route('adoptedBabyDetails',$data->id) }}" class="button button-outline button-primary"><span>
                                                <i class="fa-solid fa-ellipsis"></i>
                                            </span></a>
                                        </td>
                                    </tr>
                                    <?php $sl++; ?>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Orphan Id</th>
                                        <th>Orphan Name</th>
                                        <th>Adopter Name</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- Adopted baby table Table End-->

@endsection