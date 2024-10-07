@extends('layouts.admin')
@section('title','Applicants')
@section('content')
@if(count($requireters)>0)
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Requrited Applicant </h5><br>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-striped table-hover table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Cover Letter</th>
                                <th>CV</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requireters as $requireter)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$requireter->user->name}}</td>
                                <td>{{$requireter->user->email}}</td>
                                <td>{{$requireter->cover_letter}}</td>
                                <td>@if ($requireter->file)
                                    <a href="{{asset('files/'.$requireter->file)}}">Download</a></td>
                                @else
                                No File Found
                                @endif
                                <td>
                                    <div class='dropdown show'>
                                        <a class='btn btn-primary dropdown-toggle' href='#' role='button'
                                            id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true'
                                            aria-expanded='false'>
                                            View Profile
                                        </a>
                                        <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                                            <a class='dropdown-item' target='_blank'
                                                href="{{route('admin.users.show',$requireter->user_id)}}">Personal
                                                Info</a>
                                            <a class='dropdown-item' target='_blank'
                                                href="{{route('admin.users.activity',$requireter->user_id)}}">Activity
                                                Info</a>
                                            <a class='dropdown-item' target='_blank'
                                                href="{{route('admin.users.training',$requireter->user_id)}}">Training
                                                Info</a>
                                            <a class='dropdown-item' target='_blank'
                                                href="{{route('admin.users.club',$requireter->user_id)}}">Club
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
@endif
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">All Applicants </h5><br>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-striped table-hover table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Cover Letter</th>
                                <th>CV</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userJobs as $userJob)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$userJob->user->name}}</td>
                                <td>{{$userJob->user->email}}</td>
                                <td>{{$userJob->cover_letter}}</td>
                                <td>@if ($userJob->file)
                                    <a href="{{asset('files/'.$userJob->file)}}">Download</a></td>
                                @else
                                No File Found
                                @endif
                                <td>
                                    <div class='dropdown show'>
                                        <a class='btn btn-primary dropdown-toggle' href='#' role='button'
                                            id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true'
                                            aria-expanded='false'>
                                            View Profile
                                        </a>
                                        <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                                            <a class='dropdown-item' target='_blank'
                                                href="{{route('admin.users.show',$userJob->user_id)}}">Personal Info</a>
                                            <a class='dropdown-item' target='_blank'
                                                href="{{route('admin.users.activity',$userJob->user_id)}}">Activity
                                                Info</a>
                                            <a class='dropdown-item' target='_blank'
                                                href="{{route('admin.users.training',$userJob->user_id)}}">Training
                                                Info</a>
                                            <a class='dropdown-item' target='_blank'
                                                href="{{route('admin.users.club',$userJob->user_id)}}">Club Info</a>
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