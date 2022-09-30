@section('title')
    Welcome
@endsection

@extends('Users.Member.layouts.app')

@section('content')

<div class="container m4" >
<table class="table table-bordered" >

    <thead>
        <tr>
        <th>No.</th>
        <th>Caregiver Name</th>
        <th>Caregiver Relation</th>
        <th>Member Medical Condition</th>
        <th>location</th>
        <th>Meal Type (Check distance for Meal Type)</th>
        <th>Meal Duration</th>
        <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($memberData as $member)
            <tr>
                <td>{{ $member->id }}</td>
                <td>{{ $member->member_caregiver_name }}</td>
                <td>{{ $member->member_caregiver_relation }}</td>
                <td>{{ $member->member_medical_condition }}</td>
                <td>{{ $member->location }}</td>
                <td>{{ $member->member_meal_type }}</td>
                <td>{{ $member->member_meal_duration }}</td>
                <td>
                <a href="#">
                <button type="button" class="btn btn-outline-primary" id="edit">
                    Check Distance
                </a>

                {{-- <a href="#">
                <button type="button" class="btn btn-outline-danger" id="delete">
                    <i class="fa fa-trash"></i></button>
                </a>
                </td> --}}

                
            </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection