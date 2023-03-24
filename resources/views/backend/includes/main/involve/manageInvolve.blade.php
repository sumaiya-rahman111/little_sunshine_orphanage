@extends('backend.master.mastering')
@section('link')
<!-- extra links here -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/orphan.css">
<!-- extra links ends here -->
@endsection
@section('content')

<!-- enter content here -->

<!--staff Table Start-->
<div class="col-12 mb-30">
    <div class="box">
        <div class="box-head">
            <h3 class="title">Involve Card List</h3>
            <a href="{{ route('addinvolve') }}" class="button button-outline button-success mt-2">Add new Involvement</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered data-table data-table-export text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Heading</th>
                        <th colspan="4">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php $sl = 1; ?>
                        @foreach($datas as $data)
                                <tr>
                                    <td>{{ $sl }}</td>
                                    <td>{{ $data->heading }}</td>
                                    <td>
                                        <a href="{{ Route('detailsInvolve',$data->id) }}" class="button button-outline button-primary"><span>
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </span></a>
                                    </td>
                                    <td>
                                        <a href="{{ Route('selectStore',$data->id) }}" class="sweetalert sweetalert-success button @if($selectedInvolve) @if($selectedInvolve->iid != $data->id) button-outline @endif @endif button-success"><span>
                                            <i class="fa-solid fa-check"></i>
                                        </span></a>
                                    </td>
                                    <td>
                                        <a href="{{ Route('editInvolve',$data->id) }}" class="button button-outline button-info"><span>
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </span></a>
                                    </td>
                                    <td>
                                        <a href="{{ Route('delInvolve',$data->id) }}" class="button button-outline button-danger"><span>
                                            <i class="fa-solid fa-trash"></i>
                                        </span></a>
                                    </td>
                                    <?php $sl++; ?>
                                </tr>
                            
                        @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>#Sl</th>
                        <th>Heading</th>
                        <th>Description</th>
                        <th>Button</th>
                        <th colspan="2">Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!--staff Table End-->



<!-- content ends here -->
@endsection
@section('script')
<!-- extra scripts here -->
<!-- scripts ends here -->
@endsection







