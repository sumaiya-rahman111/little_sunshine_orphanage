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
                <h4 class="title">Orphanage</h4>
            </div>
            <div class="box-body">
                <table class="table text-center">
                    <thead style="width:100% !important; overflow:hidden;">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="tableCommonSettings" style="width:100% !important; overflow:hidden;">
                        <?php $sl = 1; ?>
                        @foreach($datas as $data)
                        <tr>
                            <td>{{ $sl }}</td>
                            <td>{{ $data->name }}</td>
                            <td><img style="height:2.5rem;" src="{{ asset('backend/imageStore/orphanages') }}/{{ $data->photo }}" alt=""></td>
                            <td>
                                <a href="{{ Route('detailsOrphanage',$data->id) }}" class="button button-outline button-primary"><span>
                                    <i class="fa-solid fa-ellipsis"></i>
                                </span></a>
                            </td>
                            <td>
                                <a href="{{ Route('editOrphanage',$data->id) }}" class="button button-outline button-info"><span>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </span></a>
                            </td>
                            <td>
                                <a href="{{ route('deleteOrphanage',$data->id) }}" class="sweetalert sweetalert-success button button-outline button-danger"><span>
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







