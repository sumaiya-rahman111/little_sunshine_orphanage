@extends('backend.master.mastering')

@section('content')

<!--Orphan Table Start-->
<div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Orphans List</h3>
                        </div>
                        <div class="box-body">
                        <table class="table table-bordered data-table data-table-export text-center">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Picture</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($datas as $data)
                                            <tr>
                                                <td>{{ $data->name }}</td>
                                                <td><img style="height:2.5rem;" src="{{ asset('backend/imageStore/orphans') }}/{{ $data->picture }}" alt=""></td>
                                                <td>
                                                    <a href="{{ Route('detailsOrphan',$data->id) }}" class="button button-outline button-primary"><span>
                                                        <i class="fa-solid fa-ellipsis"></i>
                                                    </span></a>
                                                </td>
                                                <td>
                                                    <a href="{{ Route('editOrphan',$data->id) }}" class="button button-outline button-info"><span>
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </span></a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('deleteOrphan',$data->id ) }}" class="sweetalert sweetalert-error button button-outline button-danger"><span>
                                                        <i class="fa-solid fa-trash"></i>
                                                    </span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Picture</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
                <!--Orphan Table End-->


@endsection