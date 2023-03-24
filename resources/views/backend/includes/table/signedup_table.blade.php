@extends('backend.master.mastering')


@section('content')



        



<!--Registration Table Start-->
<div class="col-12 mb-30">
                    <div class="box mt-3">
                        <div class="box-head">
                            <h3 class="title">Staffs</h3>
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
                                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3)
                                        <th>Role</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl = 1; ?>
                                        @foreach($signedUp as $data)
                                            @if($data->role == 3 or $data->role == 4 or $data->role == 5 or $data->role == 6)
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
                                                </tr>
                                            @endif
                                        @endforeach
                                    <?php $sl++; ?>
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
                                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3)
                                        <th>Role</th>
                                        @endif
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                    <div class="box mt-3">
                        <div class="box-head">
                            <h3 class="title">Orphan</h3>
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
                                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3)
                                        <th>Role</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $sl = 1; ?>
                                    @foreach($signedUp as $data)
                                        @if($data->role == 10)
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
                                            </tr>
                                        @endif
                                    @endforeach
                                <?php $sl++; ?>
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
                                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3)
                                        <th>Role</th>
                                        @endif
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                    <div class="box mt-3">
                        <div class="box-head">
                            <h3 class="title">Volunteer</h3>
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
                                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3)
                                        <th>Role</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl = 1; ?>
                                        @foreach($signedUp as $data)
                                            @if($data->role == 7)
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
                                                </tr>
                                            @endif
                                        @endforeach
                                    <?php $sl++; ?>
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
                                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3)
                                        <th>Role</th>
                                        @endif
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                    <div class="box mt-3">
                        <div class="box-head">
                            <h3 class="title">Adopter</h3>
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
                                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3)
                                        <th>Role</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl = 1; ?>
                                        @foreach($signedUp as $data)
                                            @if($data->role == 8)
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
                                                </tr>
                                            @endif
                                        @endforeach
                                    <?php $sl++; ?>
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
                                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3)
                                        <th>Role</th>
                                        @endif
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                    <div class="box mt-3">
                        <div class="box-head">
                            <h3 class="title">Contributor</h3>
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
                                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3)
                                        <th>Role</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl = 1; ?>
                                        @foreach($signedUp as $data)
                                            @if($data->role == 9)
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
                                                </tr>
                                            @endif
                                        @endforeach
                                    <?php $sl++; ?>
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
                                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3)
                                        <th>Role</th>
                                        @endif
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
                <!--Registration Table End-->


@endsection