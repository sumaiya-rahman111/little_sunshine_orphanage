@extends('backend.master.mastering')


@section('content')


<!--staff Table Start-->
<div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Staff List</h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered data-table data-table-export text-center">
                                <thead>
                                    <tr>
                                        <th>#Sl</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Phone Number</th>
                                        <th>Photo</th>
                                        <th>Role</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php $sl = 1; ?>
                                        @foreach($signedUp as $data)
                                            @if($data->role == 1 or $data->role == 2 or $data->role == 3 or $data->role == 4 or $data->role == 5 or $data->role == 6)
                                                <tr>
                                                    <td>{{ $sl }}</td>
                                                    <td>{{ $data->id }}</td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->email }}</td>
                                                    <td>{{ $data->username }}</td>
                                                    <td>{{ $data->phone_number}}</td>
                                                    <td><img style="height:2.5rem;" src="{{ asset('backend/imageStore/signup') }}/{{ $data->image }}" alt=""></td>
                                                    <td>
                                                        @if($data->role == 10)
                                                        ORPHAN
                                                        @elseif($data->role == 1)
                                                        CEO
                                                        @elseif($data->role == 2)
                                                        MD
                                                        @elseif($data->role == 3)
                                                        GRADE 1 STAFF
                                                        @elseif($data->role == 4)
                                                        GRADE 2 STAFF
                                                        @elseif($data->role == 5)
                                                        GRADE 3 STAFF
                                                        @elseif($data->role == 6)
                                                        GRADE 4 STAFF
                                                        @elseif($data->role == 7)
                                                        VOLUNTEER
                                                        @elseif($data->role == 8)
                                                        ADOPTER
                                                        @elseif($data->role == 9)
                                                        CONTRIBUTOR
                                                        @else
                                                        USER
                                                        @endif
                                                    </td>
                                                    @if(Auth::user()->role == 1 or Auth::user()->role == 2)
                                                    <td>
                                                        <a href="#" class="button button-outline button-info"><span>
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </span></a>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="button button-outline button-danger"><span>
                                                            <i class="fa-solid fa-trash"></i>
                                                        </span></a>
                                                    </td>
                                                    <?php $sl++; ?> 
                                                    @endif
                                                </tr>
                                            @endif
                                            
                                        @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#Sl</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Phone Number</th>
                                        <th>Photo</th>
                                        <th>Role</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!--staff Table End-->

@endsection