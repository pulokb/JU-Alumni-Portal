@extends('layouts.admin')
@section('title','Scholarship Applicants')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Scholarship Applicants </h5><br>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-striped table-hover table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Father Occupation</th>
                                <th>Father Income</th>
                                <th>Mother Occupation</th>
                                <th>Mother Income</th>
                                <th>Siblings</th>
                                <th>Reason</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userScholarships as $userScholarship)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$userScholarship->user->name}}</td>
                                <td>{{$userScholarship->father_occupation}}</td>
                                <td>{{$userScholarship->father_income}}</td>
                                <td>{{$userScholarship->mother_occupation}}</td>
                                <td>{{$userScholarship->mother_income}}</td>
                                <td>{{$userScholarship->siblings}}</td>
                                <td>{{$userScholarship->reasons}}</td>

                                <td>
                                    <div class='dropdown show'>
                                        <a class='btn btn-primary dropdown-toggle' href='#' role='button'
                                            id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true'
                                            aria-expanded='false'>
                                            View Profile
                                        </a>
                                        <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                                            <a class='dropdown-item' target='_blank'
                                                href="{{route('admin.users.show',$userScholarship->user_id)}}">Personal
                                                Info</a>
                                            <a class='dropdown-item' target='_blank'
                                                href="{{route('admin.users.activity',$userScholarship->user_id)}}">Activity
                                                Info</a>
                                            <a class='dropdown-item' target='_blank'
                                                href="{{route('admin.users.training',$userScholarship->user_id)}}">Training
                                                Info</a>
                                            <a class='dropdown-item' target='_blank'
                                                href="{{route('admin.users.club',$userScholarship->user_id)}}">Club
                                                Info</a>
                                        </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection