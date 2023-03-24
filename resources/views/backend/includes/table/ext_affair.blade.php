@extends('backend.master.mastering')


@section('content')


    @include('backend.includes.table.adoption_table')
    @include('backend.includes.table.donate_table')
    @include('backend.includes.table.volunteer_table')


@endsection